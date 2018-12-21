<div id="popupdataservice">
<div class="container" style="background: #f1f1f1; padding: 20px; width: 600px; height: 1000px">
  <a href="" class="close" title="Close" style="    margin-right: 10px;">x</a>
  <div class="border rounded" style="background: #ffffff; padding: 20px; margin-top: 30%">
  <form action="proses.php?plat=<?php echo $plat; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-12">
      <label for="inputTgl">Input Tanggal Cost</label>
        <input name="tgl" type="date" class="form-control" id="inputTgl" value="<?php echo date('Y-m-d'); ?>" style="background: #f1f1f1">
    </div>
    <div class="form-group col-md-12">
      <label for="ket">Input Keterangan</label>
        <textarea class="form-control" id="ket" placeholder="Type anything else here..." name="ket" style="background: #f1f1f1"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="km">Kilometers</label>
      <input type="text" class="form-control" id="ket" placeholder="" name="km" style="background: #f1f1f1">
    </div>
    <div class="form-group col-md-12">
      <label for="inputCost">Cost</label>
      <input type="text" class="form-control" id="inputCost" placeholder="Rp. " name="cost" style="background: #f1f1f1">
    </div>
    <input name="submitdataservice" value="Submit" type="submit" class="btn btn-outline-danger">
  </form>
</div>
</div></div>