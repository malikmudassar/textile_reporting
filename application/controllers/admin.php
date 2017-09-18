<?php
/**
 * Created by PhpStorm.
 * Author: Mudassar
 * Date: 9/7/2017
 * Time: 3:39 AM
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        /*$this->load->model('team_model');
        $this->load->model('manager_model');*/
        //$this->load->library('My_PHPMailer');
    }

    /*----Dashboard-----*/

    public function index()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->admin_model->getMenuItems();
            /*$data['counters']=$this->admin_model->getCounters();
            $data['feedback']=$this->team_model->getFeedbacks();
            $data['manager_feedback']=$this->manager_model->getManagerFeedbacks();
            $data['task_logs']=$this->admin_model->getAllLogs();*/
            //echo '<pre>';print_r($data['task_logs']);exit;
            $data['title']='Technologicx | Project Management';
            $this->load->view('static/head',$data);
            $this->load->view('static/header');
            $this->load->view('static/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('static/footer');
        }
        else
        {
            redirect(base_url());
        }

    }

    /*----Function Logout----*/

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    /*----Function Check user session----*/

    public function isLoggedIn()
    {
        if (!empty($this->session->userdata['id']) && $this->session->userdata['type'] == 'admin') {
            return true;
        } else {
            return false;
        }
    }


    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Starts   ///
    ///                                 ///
    ///////////////////////////////////////
    public function add_menu()
    {
        if($this->isLoggedIn())
        {
            $data['parents']=$this->admin_model->getMenuParents();
            $data['menu']=$this->admin_model->getMenuItems();
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'parent',
                        'label' =>  'Parent',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->admin_model->getMenuParents();
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_menu');
                    $this->load->view('static/footer');
                }
                else
                {
                    $this->admin_model->addMenuItem($_POST);
                    $data['success']='Congratulations! Menu Item Added Successfully';
                    $data['parents']=$this->admin_model->getMenuParents();
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_menu');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                $data['parents']=$this->admin_model->getMenuParents();
                //echo '<pre>';print_r($data);exit;
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/add_menu');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function edit_admin_menu()
    {
        if($this->isLoggedIn())
        {
            $menuId=$this->uri->segment(3);
            $data['parents']=$this->admin_model->getMenuParents();
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'parent',
                        'label' =>  'Parent',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->admin_model->getMenuParents();
                    $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/edit_admin_menu');
                    $this->load->view('static/footer');
                }
                else
                {
                    $this->admin_model->updateMenuItem($_POST,$menuId);
                    $data['success']='Congratulations! Menu Item Updated Successfully';
                    $data['parents']=$this->admin_model->getMenuParents();
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/edit_admin_menu');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                $data['parents']=$this->admin_model->getMenuParents();
                //echo '<pre>';print_r($data);exit;
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/edit_admin_menu');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function del_admin_menu()
    {
        $menuId=$this->uri->segment(3);
        $this->admin_model->delAdminMenu($menuId);
        redirect(base_url().'admin/manage_admin_menu');
    }
    public function manage_admin_menu()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_items']=$this->admin_model->getAllMenuItems();
            //echo '<pre>';print_r($data);exit;
            $data['title']='Technologicx | Project Management';
            $this->load->view('static/head',$data);
            $this->load->view('static/header');
            $this->load->view('static/sidebar');
            $this->load->view('admin/manage_admin_menu');
            $this->load->view('static/footer');
        }
        else
        {
            redirect(base_url().'admin/login');
        }
    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Admin Menu Section Ends     ///
    ///                                 ///
    ///////////////////////////////////////

    // Asad's work
    public function depart_wise_defects()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_items']=$this->admin_model->getAllMenuItems();
            //echo '<pre>';print_r($data);exit;
            $data['title']='Technologicx | Project Management';
            $this->load->view('static/head',$data);
            $this->load->view('static/header');
            $this->load->view('static/sidebar');
            $this->load->view('admin/defect_table');
            $this->load->view('static/footer');
        }
        else
        {
            redirect(base_url().'admin/login');
        }
    }

    ///////////////////////////////////////
    ///                                 ///
    ///     Defect Categories Section Starts   ///
    ///                                 ///
    ///////////////////////////////////////
    public function add_category()
    {
        if($this->isLoggedIn())
        {
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['title']='Akhtar Textile | Defect Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_category');
                    $this->load->view('static/footer');
                }
                else
                {
                    $this->admin_model->addCategory($_POST);
                    $data['success']='Congratulations! Category Added Successfully';
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['title']='Akhtar Textile | Defect Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_category');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                $data['menu']=$this->admin_model->getMenuItems();
                //echo '<pre>';print_r($data);exit;
                $data['title']='Akhtar Textile | Defect Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/add_category');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function edit_category()
    {
        if($this->isLoggedIn())
        {
            $menuId=$this->uri->segment(3);
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_item']=$this->admin_model->getById($menuId,'defect_categories');
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/edit_category');
                    $this->load->view('static/footer');
                }
                else
                {
                    $this->admin_model->updateMenuItem($_POST,$menuId);
                    $data['success']='Congratulations! Category Updated Successfully';
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['menu_item']=$this->admin_model->getById($menuId,'defect_categories');
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/edit_category');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                //echo '<pre>';print_r($data);exit;
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/edit_category');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function del_category()
    {
        $menuId=$this->uri->segment(3);
        $this->admin_model->delCategory($menuId);
        redirect(base_url().'admin/manage_categories');
    }
    public function manage_categories()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_items']=$this->admin_model->getAll('defect_categories');
            //echo '<pre>';print_r($data);exit;
            $data['title']='Akhtar Textile | Defect Management';
            $this->load->view('static/head',$data);
            $this->load->view('static/header');
            $this->load->view('static/sidebar');
            $this->load->view('admin/manage_categories');
            $this->load->view('static/footer');
        }
        else
        {
            redirect(base_url().'admin/login');
        }
    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Defect Categories Section Ends     ///
    ///                                 ///
    ///////////////////////////////////////


    ///////////////////////////////////////
    ///                                 ///
    ///     Defect Type Section Starts   ///
    ///                                 ///
    ///////////////////////////////////////
    public function add_defect_type()
    {
        if($this->isLoggedIn())
        {
            $data['parents']=$this->admin_model->getAll('defect_categories');
            $data['menu']=$this->admin_model->getMenuItems();
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'cat_id',
                        'label' =>  'Category',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->admin_model->getAll('defect_categories');
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_defect_type');
                    $this->load->view('static/footer');
                }
                else
                {
                    $this->admin_model->addDefectType($_POST);
                    $data['success']='Congratulations! Defect Type Added Successfully';
                    $data['parents']=$this->admin_model->getAll('defect_categories');
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_defect_type');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                $data['parents']=$this->admin_model->getAll('defect_categories');
                //echo '<pre>';print_r($data);exit;
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/add_defect_type');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function edit_defect_type()
    {
        if($this->isLoggedIn())
        {
            $menuId=$this->uri->segment(3);
            $data['parents']=$this->admin_model->getMenuParents();
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'parent',
                        'label' =>  'Parent',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'name',
                        'label' =>  'Name',
                        'rules' =>  'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->admin_model->getMenuParents();
                    $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/edit_admin_menu');
                    $this->load->view('static/footer');
                }
                else
                {
                    $this->admin_model->updateMenuItem($_POST,$menuId);
                    $data['success']='Congratulations! Menu Item Updated Successfully';
                    $data['parents']=$this->admin_model->getMenuParents();
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['menu_item']=$this->admin_model->getMenuItemDetail($menuId);
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/edit_admin_menu');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                $data['parents']=$this->admin_model->getMenuParents();
                //echo '<pre>';print_r($data);exit;
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/edit_admin_menu');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function del_defect_type()
    {
        $menuId=$this->uri->segment(3);
        $this->admin_model->delAdminMenu($menuId);
        redirect(base_url().'admin/manage_admin_menu');
    }
    public function manage_defect_types()
    {
        if($this->isLoggedIn())
        {
            $data['menu']=$this->admin_model->getMenuItems();
            $data['menu_items']=$this->admin_model->getDefectTypes();
            //echo '<pre>';print_r($data);exit;
            $data['title']='Technologicx | Project Management';
            $this->load->view('static/head',$data);
            $this->load->view('static/header');
            $this->load->view('static/sidebar');
            $this->load->view('admin/manage_defect_types');
            $this->load->view('static/footer');
        }
        else
        {
            redirect(base_url().'admin/login');
        }
    }
    ///////////////////////////////////////
    ///                                 ///
    ///     Defect type Section Ends     ///
    ///                                 ///
    ///////////////////////////////////////
    public function add_defect_report()
    {
        if($this->isLoggedIn())
        {
            $data['categories']=$this->admin_model->getAll('defect_categories');
            $data['menu']=$this->admin_model->getMenuItems();
            //echo '<pre>';print_r($data);exit;
            if($_POST)
            {
                $config=array(
                    array(
                        'field' =>  'style_no',
                        'label' =>  'Style # ',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'order_qty',
                        'label' =>  'Order Qty',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'job_no',
                        'label' =>  'Job #',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'finish_name',
                        'label' =>  'Finish Name',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'total_audits',
                        'label' =>  'Total Audits',
                        'rules' =>  'trim|required'
                    ),
                    array(
                        'field' =>  'categories[]',
                        'label' =>  'Departments',
                        'rules' =>  'trim|required'
                    ),
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $data['errors']=validation_errors();
                    $data['parents']=$this->admin_model->getAll('defect_categories');
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_defect_report');
                    $this->load->view('static/footer');
                }
                else
                {
                    $reportId=$this->admin_model->addDefectReport($_POST);
                    $data['success']='Congratulations! Defect Type Added Successfully';
                    $data['categories']=$this->admin_model->getAll('defect_categories');
                    $data['menu']=$this->admin_model->getMenuItems();
                    $data['title']='Technologicx | Project Management';
                    $this->load->view('static/head',$data);
                    $this->load->view('static/header');
                    $this->load->view('static/sidebar');
                    $this->load->view('admin/add_defect_report');
                    $this->load->view('static/footer');
                }
            }
            else
            {
                $data['categories']=$this->admin_model->getAll('defect_categories');
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/add_defect_report');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }
    public function update_defect_report()
    {
        if($this->isLoggedIn())
        {
            $reportId=$this->uri->segment(3);
            $data['report']=$this->admin_model->getById($reportId,'defect_report');
            $data['categories']=$this->admin_model->getReportCategories($reportId);
            //echo '<pre>';print_r($data['categories']);exit;
            $data['menu']=$this->admin_model->getMenuItems();

            //$data['detail']=$this->admin_model->getDetails($reportId);
            $data['reportId']=$reportId;
            if($_POST)
            {
                $this->admin_model->updateReportDetail($_POST,$reportId);
                $data['categories']=$this->admin_model->getReportCategories($reportId);
                $data['menu']=$this->admin_model->getMenuItems();
                //$data['detail']=$this->admin_model->getReportDetails($reportId);
                $data['success']='Report Updated Successfully';
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/update_defect_report');
                $this->load->view('static/footer');
            }
            else
            {
                $data['categories']=$this->admin_model->getReportCategories($reportId);
                $data['title']='Technologicx | Project Management';
                $this->load->view('static/head',$data);
                $this->load->view('static/header');
                $this->load->view('static/sidebar');
                $this->load->view('admin/update_defect_report');
                $this->load->view('static/footer');
            }
        }
        else
        {
            redirect(base_url().'admin/login');
        }

    }

}