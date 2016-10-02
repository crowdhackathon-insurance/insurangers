
<?php

$this->load->view('header',['title'=>$message]);

?>

<div class="panel">
    <div class="panel-body">
      <?=$message;?>
    </div>
</div>

<?php
$this->load->view('footer');
?>
