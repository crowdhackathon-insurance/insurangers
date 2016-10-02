<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
?>

<?php
 echo form_open('user/login');
?>
    <div class="form-group">
      <label for="exampleInputEmail1">Όνομα Χρήστη</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Κωδικός</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
