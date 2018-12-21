<div id="popupadd">
<div class="container" style="background: #f1f1f1; padding: 10px; width: 600px; height: 1000px">
	<a href="" class="close" title="Close" style="    margin-right: 10px;">x</a>
	<form action="proses.php" method="post" enctype="multipart/form-data">
	<div class="border border-0 rounded" style="background: #f1f1f1; padding: 20px">
	<h3>Info Driver</h3>
		<div class="row">
			<div class="form-group col-md-6">
		    	<label for="inputNama2">Nama</label>
		    	<input name="drivername" type="text" class="form-control" id="inputNama2" placeholder="Nama Driver">
		 	</div>
			<div class="form-group col-md-6">
		    	<label for="inputTgllhr">Tanggal Lahir</label>
		    	<input name="tanggal" type="date" class="form-control" id="inputTgllhr">
		 	</div>
		 </div>
		 <div class="row">	
		 	<div class="form-group col-md-6">
		    	<label for="inputEmail">Email</label>
		    	<input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Driver">
		 	</div>
	   		<div class="form-group col-md-6">
	   			<label for="inputNohp">Nomer HandPhone</label>
	   			<input name="nohp" type="text" class="form-control" id="inputNohp" placeholder="08XXXXXXXXXX">
	   		</div>
	   	</div>
	   	<div class="row">
	   		<div class="form-group col-md-6">
	   			<label for="inputNoKtp">Nomer KTP</label>
	   			<input name="noktp" type="text" class="form-control" id="inputNoKtp" placeholder="327XXXXXXXXXXXXX">
	   		</div>
	   		<div class="form-group col-md-6">
	   			<label for="inputNoSim">Nomer SIM</label>
	   			<input name="nosim" type="text" class="form-control" id="inputNoSim" placeholder="022XXXXXXXXXX">
	   		</div>
	   </div>
	   <div class="row">
	   		<div class="form-group col-md-12">
	   		<label for="inputAlamat">Alamat</label>
	   		<textarea name="alamat" class="form-control" rows="1" id="inputAlamat"></textarea>
	   		</div>
	   </div>
	   <h3>Dokumen</h3>
		<div class="row">   
	   		<div class="form-group col-md-6">
	   			<label>Foto Driver</label>
				<div class="custom-file">
		    		<input name="fotodriver" type="file" class="custom-file-input" id="foto2CustomFile" required>
		   			<label class="custom-file-label" for="foto2CustomFile">Choose file...</label>
			    	<div class="invalid-feedback">Example invalid custom file feedback</div>
	   			</div>
	   		</div>
	   		<div class="form-group col-md-6">
	   			<label>KTP</label>
				<div class="custom-file">
		    			<input name="fotoktp" type="file" class="custom-file-input" id="ktpCustomFile" required>
		   				<label class="custom-file-label" for="ktpCustomFile">Choose file...</label>
		    		<div class="invalid-feedback">Example invalid custom file feedback</div>
	   			</div>
	   		</div>
		</div>
	   	<div class="row">
	   		<div class="form-group col-md-6">
	   			<label>SIM</label>
				<div class="custom-file">
		    		<input name="fotosim" type="file" class="custom-file-input" id="simCustomFile" required>
		   			<label class="custom-file-label" for="simCustomFile">Choose file...</label>
		    			<div class="invalid-feedback">Example invalid custom file feedback</div>
		    	</div>
			</div>
		    <div class="form-group col-md-6">
		    	<label>SKCK</label>
				<div class="custom-file">
		    		<input name="fotoskck" type="file" class="custom-file-input" id="skckCustomFile" required>
		   			<label class="custom-file-label" for="skckCustomFile">Choose file...</label>
		   		 		<div class="invalid-feedback">Example invalid custom file feedback</div>
		    	</div>
			</div>
		</div>
</div>
<center><input name="submitdriver" value="Submit" type="submit" class="btn btn-outline-danger"></center>
</form>
</div>
</div>
