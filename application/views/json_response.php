<?php

$response=array();

if(isset($status))
{
  $response['status']=$status;
}

if(!empty($data))
{
  $response['data']=$data;
}

if(!empty($message))
{
  $response['message']=$message;
}

$this->output->set_content_type('application/json')->set_output(json_encode($response));
