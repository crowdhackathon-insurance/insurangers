<?php

if(!function_exists('status_ok'))
{
  function status_ok($message,$data)
  {
    return ['status'=>true,'message'=>$message,'data'=>$data];
  }
}

if(!function_exists('status_err'))
{
  function status_err($message,$data)
  {
    return ['status'=>false,'message'=>$message,'data'=>$data];
  }
}
