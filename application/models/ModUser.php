<?php

class ModUser extends CI_Model
{
  public function __construct()
  {
                    parent::__construct();
    $this->load->database();
    $this->load->library('Session');
  }

  public function login($username,$password)
  {
    $this->db->select('id,password')->from('users')->where('username',$username);

    $query = $this->db->get();

    if ( $query->num_rows() > 0 )
    {
       $data=$query-> result_array()[0];
       if(password_verify($password,$data['password']))
       {
         $this->session->set_userdata(['id'=>$data['id']]);
         return $data['id'];
       }
    }

    return false;
  }

  public function register($username,$password)
  {
    $data=['username'=>$username,'password'=>password_hash($password, PASSWORD_BCRYPT)];
    $this->db->insert('users',$data);
  }
}
