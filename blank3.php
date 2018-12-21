<!DOCTYPE html>
<?php
session_start();
include 'connect.php';
$n=1;
$totaldeb=0;
$totalkret=0;
 ?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/popup.css">
  <style type="text/css">
    #div1{
        height: 50px;
        width: 100%;
        padding: 0;
        margin: 0;
        background:   #f1f1f1;
    }
    #table1{
      text-align: center;
      font-family: arial;
      font-size: 12pt;
      width: 100%;
      color: black;
    }
    #div2{
      height: 500px;
      width: 100%;
      overflow: auto;
      overflow-x: hidden;
      margin-top: 20px;
    }
    #table2{
      text-align: center;
      font-family: arial
      font-size: 10pt;
      width: 100%;
      height: 50px;
    }
    th{
      width:  250px;
      height:   100%;
    }
    .container{
      background:   #ffffff;   
    }
    .number{
      height:   50px;
      width:  100px;
    }
  </style>
</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='blank3.php'>Driver</a></li>
   <li><a href='blank.php'>Dashboard</a></li>
   <li><a href='blank2.php'>Car</a></li>
   <li><a href='#'>Absent</a></li>
</ul>
</div>
  <?php include 'form5.php'; ?>
<div class="inside">
<div class="container">
  <div id="div1" class="table table-condensed">
    <table id="table1">
    <tr>
      <th class="number">No</th>
      <th>Nama</th>
      <th>Total Bayar</th>
      <th>Berapa hari kerja</th>
      <th>Durasi</th>
    </tr>
    </table>
  </div>
  <div id="div2" class="table table-condensed">
  <table id="table2">
            <?php $getItem=$koneksi->query("SELECT driver, sum(cost) as totalcost,count(tanggal) as totalhari from income where driver is not null group by driver"); while ($item = $getItem->fetch_assoc()) {
            // $awal = date_create($item['tanggal']);	
            // $sekarang = date_create(date('Y-m-d'));
            // $diff = date_diff($sekarang,$awal); ?>
    <tr>
      <th class="number"><?php echo $n ?></th>
      <th ><a href="tes.php?driver=<?php echo $item['driver'] ?>"><?php echo $item['driver'] ?></a></th>
      <th ><?php echo $item['totalcost'] ?></th>
      <th ><?php echo $item['totalhari']?></th>
      <th ></th>
    </tr>
              <?php $n++; } ?>
  
  </table>
  </div>
  <div id="div1" class="table table-condensed" style="height: 60px;">
    <table id="table1" class="  ">
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th><?php if (isset($_SESSION['isadmin'])): ?><a href="#popupadd" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger" style="">Popup</button></a><?php endif ?></th>
    </tr>
  </table>
  </div>
</div>
</div>
</body>
</html>