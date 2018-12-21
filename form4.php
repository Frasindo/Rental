<div id="popupincome">
<div class="container" style="background: #f1f1f1; padding: 20px; width: 600px; height: 1000px">
        <a href="" class="close" title="Close" style="    margin-right: 10px;">x</a>
     <form action="proses.php?plat=<?php echo $plat; ?>" method="post" enctype="multipart/form-data">
    <div class="border rounded" style="background: #ffffff; padding: 20px; margin-top: 30%">
      <div class="form-group col-md-12">
        <label for="day">Hari : </label>
          <input type="text" class="form-control" id="day" placeholder="Type Here..."  name="day" value="<?php echo date('l', strtotime('Y-m-d')); ?>" style="background: #f1f1f1">
      </div>
      <div class="form-group col-md-12">
                <label for="inputTgl">Input Tanggal</label>
                <input name="tgl" type="date" class="form-control" id="inputTgl" value="<?php echo date('Y-m-d'); ?>" style="background: #f1f1f1">
            </div>
      <div class="form-group col-md-12">
        <label for="inputCost">Cost : </label>
          <input name="cost" type="text" class="form-control" id="inputCost" placeholder="Rp. " name="inputCost" style="background: #f1f1f1">
      </div>  
      <div class="form-group col-md-12">
        <label for="driver">Drivers : </label>
          <select name="drivers" id="inputType" class="form-control">
              <option selected>Pilih Driver</option>
               <?php $getItem=$koneksi->query("SELECT nama FROM infodriver "); while ($item = $getItem->fetch_assoc()) { ?>
              <option value="<?php echo $item['nama'];?>"><?php echo $item['nama'];?></option>
              <?php } ?>
            </select>
      </div>
      <input name="submitincome" value="Submit" type="submit" class="btn btn-outline-danger">
    </div>
    
  </form>
</div>
</div>