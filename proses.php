<?php
include 'connect.php';
//Mobil
if (isset($_POST['submitmobil'])) {
$type=$_POST['type'];
$jenis=$_POST['jenis'];
$nama=$_POST['nama'];
$plat=$_POST['plat'];
$tahun=$_POST['tahun'];
$warna=$_POST['warna'];
$harga=$_POST['harga'];
$km=$_POST['km'];
$tanggalnow= date('Y-m-d');
$allowed_ext= array('png','jpg');
$platfile = $_FILES['plat']['name'];
$plat_tmp = $_FILES['plat']['tmp_name'];
$stnk = $_FILES['stnk']['name'];
$stnk_tmp = $_FILES['stnk']['tmp_name'];
$asuransi = $_FILES['asuransi']['name'];
$asuransi_tmp = $_FILES['asuransi']['tmp_name'];
	if (is_dir("img/mobil/$plat")) {
$dir = "img/mobil/$plat/";
}else{
mkdir("img/mobil/$plat"); 
$dir = "img/mobil/$plat/";
}

$processupload1 = move_uploaded_file($plat_tmp, $dir.$platfile);
$processupload2 = move_uploaded_file($stnk_tmp, $dir.$stnk);
$processupload3 = move_uploaded_file($asuransi_tmp, $dir.$asuransi);

$adding = mysqli_query($koneksi,"INSERT INTO `infomobil`(`type`, `jenis`, `nama`, `plat`, `tahun`, `warna`, `hargasewa`, `kilometer`, `fotomobil`, `fotostnk`, `fotoasuransi`) VALUES ('$type','$jenis','$nama','$plat','$tahun','$warna','$harga','$km','$platfile', '$stnk', '$asuransi')") or die(mysqli_error($adding));
$adding2 = mysqli_query($koneksi,"INSERT INTO `tabelmobil`(`plat`) VALUES ('$plat')") or die(mysqli_error($adding2));
$adding3 = mysqli_query($koneksi,"INSERT INTO `income`(`plat`,`tanggal`) VALUES ('$plat','$tanggalnow')") or die(mysqli_error($adding3));
$adding4 = mysqli_query($koneksi,"INSERT INTO `service`(`plat`, `tanggal`, `km`) VALUES ('$plat','$tanggalnow','$km')") or die(mysqli_error($adding4));
header('location:blank2.php'); 

}
//Debkret
if (isset($_POST['submitdebkret'])) {
	$date = date('Y-m-d', strtotime($_POST['date']));
	$keterangan=$_POST['keterangan'];
	$cost=$_POST['cost'];
	$tipe=$_POST['optradio'];
	if ($tipe == "debit") {
		$addeddeb= mysqli_query($koneksi,"INSERT INTO `debkret`(`tanggal`, `keterangan`, `debit`) VALUES ('$date','$keterangan','$cost')") or die(mysqli_error($addeddeb));
	}else if ($tipe == "kredit") {
		$addedkret= mysqli_query($koneksi,"INSERT INTO `debkret`(`tanggal`, `keterangan`, `kredit`) VALUES ('$date','$keterangan','$cost')") or die(mysqli_error($addedkret));
	}
				header('location:blank.php'); 
}
//driver
if (isset($_POST['submitdriver'])) {
$namad=$_POST['drivername'];
$ttl=$_POST['tanggal'];
$email=$_POST['email'];
$nomhp=$_POST['nohp'];
$nomktp=$_POST['noktp'];
$nomsim=$_POST['nosim'];
$alamat=$_POST['alamat'];
$fotod=$_POST['fotodriver'];
$fotos=$_POST['fotosim'];
$fotosk=$_POST['fotoskck'];
$fotokt=$_POST['fotoktp'];
//file
$allowed_ext= array('png','jpg');
$fotodriver = $_FILES['fotodriver']['name'];
$driver_tmp = $_FILES['fotodriver']['tmp_name'];
$fotosim = $_FILES['fotosim']['name'];
$sim_tmp = $_FILES['fotosim']['tmp_name'];
$fotoskck = $_FILES['fotoskck']['name'];
$skck_tmp = $_FILES['fotoskck']['tmp_name'];
$fotoktp = $_FILES['fotoktp']['name'];
$ktp_tmp = $_FILES['fotoktp']['tmp_name'];
	if (is_dir("img/driver/$namad")) {
$dir = "img/driver/$namad/";
}else{
mkdir("img/driver/$namad"); 
$dir = "img/driver/$namad/";
}

$processupload1 = move_uploaded_file($driver_tmp, $dir.$fotodriver);
$processupload2 = move_uploaded_file($skck_tmp, $dir.$fotoskck);
$processupload3 = move_uploaded_file($sim_tmp, $dir.$fotosim);
$processupload4 = move_uploaded_file($ktp_tmp, $dir.$fotoktp);

$adddriver = mysqli_query($koneksi,"INSERT INTO `infodriver`(`nama`, `tgllahir`, `email`, `nohp`, `noktp`, `nosim`, `alamat`, `fotodriver`, `fotosim`, `fotoktp`, `fotoskck`) VALUES ('$namad','$ttl','$email','$nomhp','$nomktp','$nomsim','$alamat','$fotodriver','$fotosim','$fotoktp','$fotoskck')") or die(mysqli_error($adding));

header('location:blank3.php'); 

}
 //income
if (isset($_POST['submitincome'])) {
$cost=$_POST['cost'];
$plat=$_GET['plat'];
$tanggal=$_POST['tgl'];
$driver=$_POST['drivers'];

$addincome=mysqli_query($koneksi,"INSERT INTO `income`(`plat`, `tanggal`, `cost`, `driver`) VALUES ('$plat','$tanggal','$cost','$driver')") or die(mysqli_error($addincome));

//get total cost
$getcost=$koneksi->query("SELECT *, SUM(cost) as totalcost FROM income where plat='$plat'"); while ($item = $getcost->fetch_assoc()) {
	$totalcost=$item['totalcost'];
}

$addincome2=mysqli_query($koneksi,"UPDATE `tabelmobil` SET `income`='$totalcost' where plat='$plat'") or die(mysqli_error($addincome2));
header('location:income.php?plat='.$plat); 
}

 //income - service
if (isset($_POST['submitdataservice'])) {
$tanggal=$_POST['tgl'];
$keterangan=$_POST['ket'];
$km=$_POST['km'];
$cost=$_POST['cost'];
$plat=$_GET['plat'];
$ketlowercase= strtolower($keterangan);
if ($ketlowercase=='perpanjang stnk') {
$addtanggal=mysqli_query($koneksi,"UPDATE `tabelmobil` SET `tglstnk`='$tanggal' where plat='$plat'") or die(mysqli_error($addtanggal));
}
$addservice=mysqli_query($koneksi,"INSERT INTO `service`(`plat`, `tanggal`, `km`, `cost`, `keterangan`) VALUES ('$plat','$tanggal','$km','$cost','$keterangan')") or die(mysqli_error($addservice));

$updateservice=mysqli_query($koneksi,"UPDATE `tabelmobil` SET `tglmaintenance`='$tanggal' where plat='$plat'") or die(mysqli_error($updateservice));

$updatekm=mysqli_query($koneksi,"UPDATE `infomobil` SET `kilometer`='$km' where plat='$plat'") or die(mysqli_error($updatekm));
}
header('location:income.php?plat='.$plat); 
?>