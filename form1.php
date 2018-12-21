<div id="popupadd">
<div class="container" style="background: #f1f1f1; margin-top: 7%;padding: 20px; width: 600px;">
		<a href="" class="close" title="Close" style="    margin-right: 10px;">x</a>
	<form class="" action="proses.php" method="post">
		<div class="border rounded" style="background: #ffffff; padding: 20px;">
			<div class="form-group col-md-12">
                <label for="inputTgl">Input Tanggal Cost</label>
                <input value="<?php echo date('Y-m-d'); ?>" name="date" type="date" class="form-control" id="inputTgl">
            </div>
            <div class="form-group col-md-12">
		   		<label for="inputKet">Input Keterangan Cost </label>
		   		<textarea name="keterangan" class="form-control" rows="2" id="inputAlamat"></textarea>
	   		</div>
	   		<div class="form-group col-md-12">
		    	<label for="inputcost">Cost</label>
		    	<input name="cost" type="text" class="form-control" id="inputcost" placeholder="Rp-">
		 	</div>
	   		<div class="row" style="margin-left: 20px;">
	   			<div class="radio">
				  <label><input value="debit" type="radio" name="optradio">Debit</label>
				</div>
				<div class="radio" style="margin-left: 30px">
				  <label><input value="kredit" type="radio" name="optradio">Kredit</label>
				</div>
	   		</div>
	   		<input name="submitdebkret" type="submit" class="btn btn-outline-danger" style="margin-left: 20px" value="Submit">
		</div>
	</form>
</div>
</div>