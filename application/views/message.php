
<?php

$this->load->view('header',['title'=>$message]);

?>

<div class="panel <?=($status)?'panel-success':'panel-danger'?>">
    <div class="panel-body">
      <?=$message;?>
    </div>
</div>

<?php
$this->load->view('footer');
?>
