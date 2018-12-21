<!DOCTYPE html>
<?php
include 'connect.php';
$nincome=1;
$nservice=1;
$totalcost=0;
if (!isset($_GET['plat'])) {
	header('location:error.php'); 
} else {
	$plat= $_GET['plat'];
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/popup.css">
	<style>
	.wrap{
		width: 100%;
		background: #f1f1f1;
		background-size: cover;
	}
	.header{
		float: left;
		width: 100%;
		height: 100px;
		background: #acacac;
		text-align: center;
	}
	.body{
		float: left;
		width: 70%;
		height: 100%;
		max-height: 850px;
		background: #ffffff;

	}
	.sidebar{
		float: left;
		width: 30%;
		height: 850px;
		background: #f2f2f2;

	}
	.side1{
		height: 50%;
		width: 95%;
		background: #ffffff;
		margin: 10px;
		text-align: center;

	}
	.side2{
		height: 46%;
		width: 95%;
		background: #ffffff;
		margin: 10px;
		margin-right: 10px;
		text-align: center;
		float: none;
	}
	#div1{
        height: 60px;
        width: 100%;
        padding: 0;
        margin: 0;
        background:   #f2f2f2;
    }
    #table1{
      text-align: center;
      font-family: arial;
      font-size: 12pt;
      width: 100%;
      color: black;
    }
    #div2{
      height: 694px;
      width: 100%;
      overflow: auto;
      overflow-x: hidden;
      margin-top: 20px;
    }
    #div22{
      height: 180px;
      width: 100%;
      overflow: auto;
      overflow-x: hidden;
      margin-top: 20px;
    }
    #dtm1{
    	height: 45%;
    	width: 100%;
    }
    .dtmf{
    	width: 200px;
    	height: 200px;
    }
    .dtmd{
    	width: 33%;
    	height: 20%;
    	background: red;
    	/*opacity: 1;*/
    }
    #dtm2{
    	height: 45%;
    	width: 100%;
    }
    #th1{
    	width: 150px;
    }
    #th2{
    	width: 300px;
    }
    #table2{
      text-align: center;
      font-family: arial
      font-size: 10pt;
      width: 100%;
      height: 50px;
    }
    th{
      width:  200px;
      height:   100%;
    }
    .container{
      background:   #ffffff;   
    }
    .number{
      height:   50px;
      width:  100px;
    }
    div.gallery img {
   	  width: 100%;
 	  height: 100px;
	}
	div.desc {
	  padding: 15px;
	  text-align: center;
	}
	.responsive {
	  padding: 0 6px;
	  float: left;
	  width: 33.3%;
	}
#myImg1 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg1:hover {opacity: 0.7;}
#myImg2 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg2:hover {opacity: 0.7;}
#myImg3 {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg3:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes zoom {
  from {transform: scale(0.1)} 
  to {transform: scale(1)}
}

/* The Close Button */
.cls {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.cls:hover,
.cls:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}
	</style>
</head>
<body>
	<?php include 'form3.php'; include 'form4.php'; ?>
<div class="wrap" >
	<?php $cek=$koneksi->query("SELECT count(tanggal) as totalhari from income where plat='$plat'");while($hasil = $cek->fetch_assoc()){ ?>
	<div class="header"><h1><?php echo $hasil['totalhari']?> Day 	Total 	Off 	Driver</h1></div>
	<?php } ?>
	<div class="body">
		<div id="div1" class="table table-condensed">
		    <table id="table1">
		    <tr>
		      <th class="number">No</th>
		      <th>Hari</th>
		      <th>Tanggal</th>
		      <th>Cost</th>
		      <th>Driver</th>
		    </tr>
		    </table>
  		</div>
  		<div id="div2" class="table table-condensed">
		  <table id="table2">
		  	 <?php $getItem=$koneksi->query("SELECT * FROM income where plat='$plat'"); while ($item = $getItem->fetch_assoc()) { 
		  	 	$daynow = date('l', strtotime($item['tanggal'])); ?>
		    <tr>
		      <th class="number"><?php echo $nincome; $nincome++;?></th>
		      <th ><?php echo $daynow ?></th>
		      <th ><?php echo $item['tanggal']; ?></th>
		      <th ><?php echo $item['cost']; ?></th>
		      <th ><?php echo $item['driver']; ?></th>
		    </tr>
		<?php } $nincome++; ?>
		  </table>
		</div>
		<div id="div1" class="table table-condensed">
		    <table id="table1" class="  ">
			    <tr>
			      <th></th>
			      <th></th>
			      <th><a href=""><button type="button" class="btn btn-outline-danger" style="float:  right;">Delete Income</button></a></th>
			      <th><a href=""><button type="button" class="btn btn-outline-danger" style="float:  right;">Edit Income</button></a></th>
			      <th><a href="#popupincome" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger" style="float:  right;">Input Income</button></a></th>
			    </tr>
		    </table>
		</div>

	</div>
	<div class="sidebar">
		<div class="side1"><h2>Data Service</h2>
		<div id="div1" class="table table-condensed" style="background: #ffffff">
		    <table id="table1" style="background: #ffffff">
		    <tr>
		      <th class="number">No</th>
		      <th>Tanggal</th>
		      <th>Keterangan</th>
		      <th>Km</th>
		      <th>Cost</th>
		    </tr>
		    </table>
  		</div>
	  		<div id="div22" class="table table-condensed">
			  <table id="table2">
			  	<?php $getItemServ=$koneksi->query("SELECT * FROM service where plat='$plat' order by tanggal desc"); while ($itemserv = $getItemServ->fetch_assoc()) { ?>
			    <tr>
			      <th class="number"><?php echo $nservice;$nservice++; ?></th>
			      <th ><?php echo $itemserv['tanggal']; ?></th>
			      <th ><?php echo $itemserv['keterangan']; ?></th>
			      <th ><?php echo $itemserv['km']; ?></th>
			      <th ><?php echo $itemserv['cost'];$totalcost+=$itemserv['cost']; ?></th>
			    </tr>
			    <?php } $nservice++; ?>
			  </table>
			</div>
			<div id="div1" class="table table-condensed" style="background: #ffffff">
		    <table id="table1" style="background: #ffffff">
		    <tr>
		      <th>Total</th>
		      <th></th>
		      <th></th>
		      <th></th>
		      <th><?php echo $totalcost; ?></th>
		    </tr>
		    </table>
		    <a href="#popupdataservice" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger" style="float:  right;">Input Service</button></a>
  		</div>
		</div>
		<?php $getItemServ=$koneksi->query("SELECT * FROM infomobil where plat='$plat'"); while ($iteminfo = $getItemServ->fetch_assoc()) { ?>
		<div class="side2"><h2>Data Mobil</h2>
			<div id="dtm1">
				<div class="responsive">
  					<div class="gallery">
    				<img id="myImg1" src="img/mobil/<?php echo $iteminfo['plat'] ?>/<?php echo $iteminfo['fotomobil'] ?>">
    					<div class="desc">Mobil</div>
  					</div>
				</div>
				<div class="responsive">
  					<div class="gallery">
    				<img id="myImg2" src="img/mobil/<?php echo $iteminfo['plat'] ?>/<?php echo $iteminfo['fotostnk'] ?>">
    					<div class="desc">STNK</div>
  					</div>
				</div>
				<div class="responsive">
  					<div class="gallery">
   	    				<img id="myImg3" src="img/mobil/<?php echo $iteminfo['plat'] ?>/<?php echo $iteminfo['fotoasuransi'] ?>">
  					</div>
				</div>
			</div>
			<div id="dtm2">
				<table style="text-align:left; margin: 5px 0px 5px 30px; ">
					<tr>
						<th id="th1"><h6>Nama</h6></th>
						<th id="th2"><?php echo $item['nama'] ?></th>
					</tr>
					<tr>
						<th id="th1"><h6>Ktp</h6></th>
						<th id="th2">anjay</th>
					</tr>
					<tr>
						<th id="th1"><h6>No.Handphone</h6></th>
						<th id="th2">anjay</th>
					</tr>
					<tr>
						<th id="th1"><h6>Alamat</h6></th>
						<th id="th2">anjay</th>
					</tr>
				</table>
			</div>
		</div>
	<?php } ?>
	</div>
</div>
<div id="myModal" class="modal">
  <span class="cls">×</span>
  <img class="modal-content" id="img01">
</div>	
</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg1');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;

}
img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}
img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;

}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("cls")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}	
</script>
</html>