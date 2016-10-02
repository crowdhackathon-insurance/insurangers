<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('form');
?>


<?php
 echo  form_open_multipart('calculate/calculate');
?>
		<div class="form-group">
		    <label for="inputFile" class="control-label">Αρχείο προς ασφάλιση</label>
		      <input type="file" class="form-control" name="file" id="inputFile" placeholder="Αρχείο">
		    </div>

		  <div class="form-group">
		    <label for="inputPath" class="control-label">Διαδρομή αρχείου</label>
		      <input type="text" class="form-control" name="path" id="inputPath" placeholder="Διαδρομή">
		  </div>

			<!--Apozimiosi-->

		  <div class="form-group">

		  <label class="input" for="exampleInputAmount">Ποσο αποζημίωσης</label>
		    <div class="input-group">
		      <div class="input-group-addon">€</div>
		      <input type="text" class="form-control" name="estimated_cost" id="exampleInputAmount" placeholder="Amount">
		    </div>
		  </div>

			<div class="form-group">
			 <label for="inputPath" class="control-label"Διάρκεια Ασφάλισης</label>
				 <input type="text" class="form-control" name="insurance_duration" id="inputPath" placeholder="Διάρκεια ασφάλησης">
			</div>

		  <div class="form-group">
				<button type="submit" class="btn btn-primary">Ασφάλιση</button>
		  </div>

		</form>
	</div>
	</div>
