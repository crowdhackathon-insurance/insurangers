<?php

class MocCalculate extends CI_Model
{
  public function __construct()
  {
    parent::construct();
    $this->load->database();
    $this->load->model('ModUser','user');
    $this->load->helper('');
  }

  /**
  * Method that adds a hash from a file to the database.
  *
  * @param string $temp_filename Temporary filename of the file stored into the database.
  * @param string $file_name Filename of the user's file stored into the database.
  * @param $stored_path The path where the file is stored to the user's computer.
  *
  * @return boolean | int
  */
  public function add_hash($temp_filename, $file_name, $stored_path, $estimated_cost, $insurance_duration)
  {
    $user_id=$this->user->is_logedIn();

    if(empty($user_id))
    {
        return -1;
    }

    try
    {
      $dataToInsert=array('filename'=>$file_name,'path'=>$stored_path,'loss_price'=>$estimated_cost,'insurance_duration'=>$insurance_duration);

      $dataToInsert['hash']=fileMd5($temp_filename);
      $dataToInsert['size']=fileKilobyteSize($temp_filename);

      $this->db->insert('files',$dataToInsert);

      $file_id=$this->db->insert_id();

      return $file_id;
    }
    catch(Exception $e)
    {
      return false;
    }

  }
}
