<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModUser','user');
    $this->load->helper('response');
  }

  /**
  * A simple method fro registration
  * Ajax call users/register
  */
  public function register()
  {
    $username=$this->input->post('username');
    $password=$this->input->post('password');

    $this->user->register($username,$password);

    echo "OK";
  }

  /**
  * Login Action
  * Ajax Call user/login
  */
  public function login()
  {
    $username=$this->input->post('username');
    $password=$this->input->post('password');

    $id=$this->user->login($username,$password);

    $statusData=null;
    if($id===false)
    {
      $statusData=status_err('Cannot Login',null);
      $this->load->view('json_response.php',$statusData);
    }
    else
    {
      $this->load->helper('url');
      redirect('welcome/file_form');
    }

  }
}
