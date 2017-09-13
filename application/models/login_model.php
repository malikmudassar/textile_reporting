<?php
/**
 * Created by PhpStorm.
 * User: saadi
 * Date: 9/7/2017
 * Time: 3:41 AM
 */

class Login_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
    /*----Function Login Start----*/

    public function do_login($data)
    {
        $st=$this->db->select('*')->from('users')
            ->WHERE('email',$data['email'])
            ->WHERE('password',md5(sha1($data['password'])))
            ->get()->result_array();
        if(count($st)>0)
        {
            if($st[0]['status']=='approved')
            {
                return $st[0];
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    /*----Function Login End----*/

   /*----Function Forgot Password Start-----*/

    public function checkEmail($data)
    {
        return $this->db->query('SELECT * from users WHERE email=\''.$data['email'].'\'')->result_array();
    }

    public function getUserByEmail($email)
    {
        $st=$this->db->select('*')->from('users')
            ->WHERE('email',$email)
            ->get()->result_array();
        if(count($st)>0)
        {
            return $st[0];
        }
        else
        {
            return false;
        }
    }

    public function updatePassword($id,$hash,$password)
    {
        $st=$this->db->query('SELECT * from users WHERE id='.$id.' and hash=\''.$hash.'\'')->result_array();
        if(count($st)>0)
        {
            $newHash=md5(sha1($hash));
            $this->db->query('UPDATE users set password=\''.md5(sha1($password)).'\', hash=\''.$newHash.'\' WHERE id='.$id);
            return true;
        }
        else
        {
            return false;
        }

    }

    /*----Function Forgot Password End----*/

    public function getById($table,$id)
    {
        $st=$this->db->select('*')->from($table)->WHERE('id',$id)->get()->result_array();
        return $st[0];
    }






}