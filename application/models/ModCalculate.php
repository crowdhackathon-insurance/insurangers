<?php

class ModCalculate extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('ModUser','user');
    $this->load->helper('file');
  }

  /**
  * Method that adds a hash from a file to the database.
  *
  * @param string $file_array The value from a specific file input
  * @param string $file_name Filename of the user's file stored into the database.
  * @param string $stored_path The path where the file is stored to the user's computer.
  * @param numeric $estimated_cost The money that the user needs to get back when the file is lost
  * @param int $insurance_duration How many months the user needs to insure the file.
  *
  * @return boolean | int
  */
  public function add_hash(array $file_array ,$stored_path, $estimated_cost, $insurance_duration)
  {
    $user_id=$this->user->is_logedIn();

    if(empty($user_id))
    {
        return -1;
    }

    try
    {
      if((int)$estimated_cost>0 && (int)$insurance_duration>0 && $file_array['error']===UPLOAD_ERR_OK)
      {
        $dataToInsert=array('user_id'=>$user_id,'name'=>$file_array['name'],'path'=>$stored_path,'loss_price'=>$estimated_cost,'insurance_duration'=>$insurance_duration);

        $dataToInsert['hash']=fileMd5($file_array['tmp_name']);
        $dataToInsert['size']=toKilobytes($file_array['size']);

        $this->db->insert('files',$dataToInsert);

        $file_id=$this->db->insert_id();

        return $file_id;
      }
    }
    catch(Exception $e)
    {
      return false;
    }

    return false;
  }


  /**
  * Calculate the monthly fee that the user needs to pay.
  *
  * @param numeric $estimated_cost The money that the user needs to get back when the file is lost
  * @param int $insurance_duration How many months the user needs to insure the file.
  *
  * @return float
  */
  public function calculateMonthlyFee($estimated_cost,$insure_length)
  {
    return (floatval($estimated_cost)/(int)$insure_length)+3;
  }

}
