<?php

class Calculate extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("ModCalculate",'calculate');
    $this->load->helper('response');
  }

  public function calculate()
  {
    $file=$_FILES['file'];

    $path=$this->input->post('path');
    $estimated_cost=$this->input->post('estimated_cost');
    $insurance_duration=$this->input->post('insurance_duration');


    $ret=$this->calculate->add_hash($file,$path,$estimated_cost,$insurance_duration);

    $retData=null;
    if($ret===-1)
    {
      $retData=status_err("User has not logedin",null);
      $this->load->view('json_response',$retData);
    }
    elseif($ret===false)
    {
      $retData=status_err("An error occured",null);
      $this->load->view('json_response',$retData);
    }
    else
    {
      $ret=$this->calculate->calculateMonthlyFee($estimated_cost,$insurance_duration);
      $this->load->view('message',['message'=>"Your monthly fee is: <strong>".number_format($ret,2)."</strong> Euros"]);

    }

  }


  public function monthlyFee()
  {
    $estimated_cost=$this->input->post('estimated_cost');
    $insurance_duration=$this->input->post('insurance_duration');

    $ret=$this->calculate->calculateMonthlyFee($estimated_cost,$insurance_duration);
    $retData=status_ok("The monthly fee is:",$ret);

    $this->load->view('json_response',$retData);
  }
}
