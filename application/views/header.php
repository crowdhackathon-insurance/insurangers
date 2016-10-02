<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>

  <link rel="stylesheet" href="<?=base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css');?>">

  <script src="<?=base_url('assets/jquery-3.1.1.min.js');?>"></script>
  <script src="<?=base_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js');?>"></script>

  <?php
    if(isset($javascripts) && is_array($javascripts))
    {
      foreach($javascripts as $js)
      {
    ?>
        <script src="<?=base_url($js);?>"></script>
    <?php
      }
    }
  ?>

</head>
<body>
  <div class="container">
    <div class="col-xs-12">
