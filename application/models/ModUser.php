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

  /**
  * Performs a very basic login providing username and password
  */
  public function register($username,$password)
  {
    $data=['username'=>$username,'password'=>password_hash($password, PASSWORD_BCRYPT)];
    $this->db->insert('users',$data);
  }

  /**
  * Checks if the user is logedin and returns false id the user is not logedin.
  * Else it returns the user id
  */
  public function is_logedIn()
  {
    if(!$this->session->has_userdata('id'))
    {
      return false;
    }

    return $this->session->get_userdata('id');
  }
}
