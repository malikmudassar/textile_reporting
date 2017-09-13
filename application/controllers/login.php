<?php
/**
 * Created by PhpStorm.
 * User: saadi
 * Date: 9/7/2017
 * Time: 3:40 AM
 */

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('My_PHPMailer');
    }

    public function index()
    {
        if(!$this->isLoggedIn())
        {
            $data['title']='Akhtar Textile | CRM';
            if($_POST)
            {
                $config=array(
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email',
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required',
                    ),
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $this->load->view('static/head', $data);
                    $this->load->view('static/login');
                    //$this->load->view('static/footer');
                }
                else
                {
                    $user=$this->login_model->do_login($_POST);
                    if(!empty($user))
                    {
                        if($user['role']==1)
                        {
                            $user['type']='admin';
                        }
                        elseif($user['role']==2)
                        {
                            $user['type']='team';
                        }
                        elseif($user['role']==3)
                        {
                            $user['type']='client';
                        }
                        elseif($user['role']==4)
                        {
                            $user['type']='manager';
                        }
                        $this->session->set_userdata($user);

                        //One way to do is this
                        require(APPPATH.'user_info.php');
                        $c_info = new Users_info; //User_info class constructor
                        $ip = $c_info->c_ip();
                        $os = $c_info->c_OS();
                        $b = $c_info->c_Browser();
                        $d = $c_info->c_Device();
                        $data = array('ip' => $ip, 'browser' => $b, 'operating_system' => $os, 'device' => $d);

                        $id = $this->session->userdata('id');
                        $where = array('id' => $id);
                        //$this->add_record('users',$data,$where);
                        $this->db->where($where);
                        $this->db->update('users', $data);
                        /*echo '<pre>';
                        print_r($data);
                        exit;*/

                        // print_r($this->session->all_userdata());exit;
                        redirect(base_url() . $user['type']);

                    }
                    else
                    {
                        $data['errors']='The credentials you have provided are incorrect or your account has not been approved yet.';
                        $this->load->view('static/head', $data);
                        $this->load->view('static/login');
                        //$this->load->view('static/footer');
                    }
                }
            }
            else
            {
                $this->load->view('static/head', $data);
                $this->load->view('static/login');
                //$this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url());
        }

    }

    public function add_record($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->insert($table, $data);
    }

    /*---Forgot Password Section Start----*/

    public function mailchange_passwordLink($user)
    {
        // Sending User a URL in the Email to Active his account by verifying his email address
        $settings=$this->admin_model->getEmailSettings();
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = $settings->host;                    // setting GMail as our SMTP server
        $mail->Port       = $settings->port;                    // SMTP port to connect to GMail
        $mail->Username   = $settings->email;                   // user email address
        $mail->Password   = $settings->password;                // password in GMail
        $mail->SetFrom($settings->sent_email, $settings->sent_title);       //Who is sending the email
        $mail->AddReplyTo($settings->reply_email,$settings->reply_email);   //email address that receives the response
        $mail->Subject    = "Please reset your password";
        $mail->IsHTML(true);
        $body = $this->load->view('emails/mailChangePasswordLink', $user, true);
        $mail->MsgHTML($body);
        $destination = $user['email']; // Who is addressed the email to
        $mail->AddAddress($destination);
        if(!$mail->Send()) {
            $data['code']=300;
            $data["message"] = "Error: " . $mail->ErrorInfo;
        }
    }
    public function mailPasswordChanged($user)
    {
        // Sending User a URL in the Email to Active his account by verifying his email address
        $settings=$this->admin_model->getEmailSettings();
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = $settings->host;                    // setting GMail as our SMTP server
        $mail->Port       = $settings->port;                    // SMTP port to connect to GMail
        $mail->Username   = $settings->email;                   // user email address
        $mail->Password   = $settings->password;                // password in GMail
        $mail->SetFrom($settings->sent_email, $settings->sent_title);       //Who is sending the email
        $mail->AddReplyTo($settings->reply_email,$settings->reply_email);   //email address that receives the response
        $mail->Subject    = "Congratulations! You password has been reset.";
        $mail->IsHTML(true);
        $body = $this->load->view('emails/mailPasswordChanged', $user, true);
        $mail->MsgHTML($body);
        $destination = $user['email']; // Who is addressed the email to
        $mail->AddAddress($destination);
        if(!$mail->Send()) {
            $data['code']=300;
            $data["message"] = "Error: " . $mail->ErrorInfo;
        }
    }

    public function forgot_pswd()
    {
        $data['title'] = 'Akhtar Textile | Forget Password';
        if($_POST)
        {
            $check=$this->login_model->checkEmail($_POST);
            //print_r($check);exit;
            if(empty($check))
            {
                $data['errors']='Sorry! The Email address you have provided is not registered in our database!';
                $data['title'] = 'Akhtar Textile | Forget Password';

                $this->load->view('static/head', $data);
                $this->load->view('static/forgot');
            }
            else
            {
                $user=$this->login_model->getUserByEmail($_POST['email']);
                $this->mailchange_passwordLink($user);
                $data['success']='An Email has been sent to you on your email address with the password reset link. Please click on that link to reset your password.';
                $data['title'] = 'Akhtar Textile | Forget Password';

                $this->load->view('static/head', $data);
                $this->load->view('static/forgot');


            }
        }
        else
        {

            $this->load->view('static/head', $data);
            $this->load->view('static/forgot');
        }

    }
    public function change_password()
    {
        $id=$this->uri->segment(3);
        $hash=$this->uri->segment(4);

        $data['title'] = 'Akhtar Textile | Forget Password';

        if($_POST)
        {
            $config=array(
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'c_password',
                    'label' => 'Confirm Password',
                    'rules' => 'trim|required|matches[password]'
                ),
            );
            $this->form_validation->set_rules($config);
            if($this->form_validation->run()==false)
            {
                $data['errors']=validation_errors();
                $data['title'] = 'Akhtar Textile | Forget Password';
                $this->load->view('static/head', $data);
                $this->load->view('static/change_password');
            }
            else
            {
                $check=$this->login_model->updatePassword($id,$hash,$_POST['password']);
                if($check)
                {
                    $user=$this->login_model->getById('users',$id);
                    $this->mailPasswordChanged($user);
                    $data['success']='Congratulations! Your password has been changed.';
                    $data['title'] = 'Akhtar Textile | Forget Password';

                    $this->load->view('static/head', $data);
                    $this->load->view('static/change_password');
                }
                else
                {
                    $data['errors']='The link is expired. Try Again';
                    $data['title'] = 'Akhtar Textile | Forget Password';
                    $this->load->view('static/head', $data);
                    $this->load->view('static/change_password');

                }
            }
        }
        else
        {

            $this->load->view('static/head', $data);
            $this->load->view('static/change_password');
        }

    }


    /*---Forgot Password Section End----*/


    public function isLoggedIn()
    {
        if(!empty($this->session->userdata['id'])&& !empty($this->session->userdata['type']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}