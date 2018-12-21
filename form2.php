<div id="popupadd">
<div class="container" style="background: #f1f1f1; padding: 10px; width: 600px; height: 1000px">
	<div class="border rounded" style="background: #ffffff; padding: 20px;">
     <form action="proses.php" method="post" enctype="multipart/form-data">
      <a href="" class="close" title="Close" style="    margin-right: 10px;">x</a>
			<h5>Info Mobil</h5><hr>
			<div class="row">
      <div class="form-group col-md-6">
            <label for="inputType">Type</label>
            <select name="type" id="inputType" class="form-control">
              <option selected>Pilih Type</option>
              <option value="Sedan">Sedan</option>
              <option value="SVU">SVU</option>
              <option value="MPV">MPV</option>
              <option value="Station Wagon">Station Wagon</option>
              <option value="City Car">City Car</option>
              <option value="Copue">Coupe</option>
              <option value="Convertible">Convertible</option>
            </select>
      </div>
      <div class="form-group col-md-6">
          <label for="inputJenis">Jenis</label>
          <select name="jenis" id="inputType" class="form-control">
            <option selected>Pilih Jenis</option>
            <option value="Audi">Audi</option>
            <option value="BMW">BMW</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Daihatsu">Daihatsu</option>
            <option value="Datsun">Datsun</option>
            <option value="Hino">Hino</option>
            <option value="Honda">Honda</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Isuzu">Isuzu</option>
            <option value="Lexus">Lexus</option>
            <option value="Mazda">Mazda</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Mitsubishi">Mitsubishi</option>
            <option value="Nissan">Nissan</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Toyota">Toyota</option>
            <option value="Porsche">Porsche</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Wuling">Wuling</option>
          </select>
        </div>
    </div>
    <div class="row">
    	<div class="form-group col-md-6">
          <label for="inputNama1">Nama</label>
          <input name="nama" type="text" class="form-control" id="inputNama1" placeholder="Nama Mobil">
    	</div>
    	<div class="form-group col-md-6">
          <label for="inputPlat">Plat</label>
          <input name="plat" type="text" class="form-control" id="inputPlat" placeholder="B 1111 KZZ">
    	</div>
    </div>
    <div class="row">
    	<div class="form-group col-md-6">
        	<label for="inputTahun">Tahun</label>
          	<input name="tahun" type="text" class="form-control" id="inputTahun" placeholder="2000">
     	</div>
     	<div class="form-group col-md-6">
        	<label for="inputWarna">Warna</label>
        	<select name="warna" id="inputWarna" class="form-control">
         		<option selected="">Pilih Warna</option>
          		<option value="White">White</option>
          		<option value="Silver Metalic">Silver Metalic</option>
          		<option value="Grey Metalic">Grey Metalic</option>
          		<option value="Black Metalic">Black Metalic</option>
          		<option value="Brown">Brown</option>
          		<option value="Blue">Blue</option>
          		<option value="Gold">Gold</option>
          		<option value="Green">Green</option>
          		<option value="Orange">Orange</option>
          		<option value="Red">Red</option>
          		<option value="Yellow">Yellow</option>
        	</select>
		</div>
    </div>
    <div class="row">
      	<div class="form-group col-md-6">
      		<label for="inputHarga">Harga</label>
      		<input name="harga" type="text" class="form-control" id="inputHarga" placeholder="500.000">    
      	</div>
      	<div class="form-group col-md-6">
      		<label for="inputKm">Kilometers</label>
     		<input name="km" type="text" class="form-control" id="inputKm"> 
      	</div>
    </div>
    		<h5>Dokumen</h5><hr>
      <div class="row">
        <div class="form-group col-md-6">
          <h5>Upload Foto Mobil</h5>
          	<div class="custom-file">
            	<input name="plat" type="file" class="custom-file-input" id="foto1CustomFile" required>
            	<label class="custom-file-label" for="foto1CustomFile">Choose file...</label>
            		<div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
        </div>
        <div class="form-group col-md-6">
          <h5>STNK</h5>
          	<div class="custom-file">
             	<input name="stnk" type="file" class="custom-file-input" id="stnkCustomFile" required>
            	<label class="custom-file-label" for="stnkCustomFile">Choose file...</label>
            		<div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
        </div>
      <div class="form-group col-md-6">
        <h5>Asuransi</h5>
       	  <div class="custom-file">
           	<input name="asuransi"  type="file" class="custom-file-input" id="asuransiCustomFile" required>
          	<label class="custom-file-label" for="AsuransiCustomFile">Choose file...</label>
        		<div class="invalid-feedback">Example invalid custom file feedback</div>
			    </div>
		  </div>
	</div>
    <input name="submitmobil" value="Submit" type="submit" class="btn btn-outline-danger">
  </form>
</div>
</div>
</div>