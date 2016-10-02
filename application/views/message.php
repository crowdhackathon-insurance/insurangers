
<?php

$this->load->view('header',['title'=>$message]);

?>

<div class="panel">
    <div class="panel-body">
      <?=$message;?>
    </div>
</div>

<?php

  $this->load->helper('url');

  echo anchor('welcome/file_form', 'Αποδοχή Ασφαλίστρου', array('class' => 'btn btn-success','onclick'=>"alert('To αρχείο σας ασφαλίστηκε')"));

$this->load->view('footer');
?>
