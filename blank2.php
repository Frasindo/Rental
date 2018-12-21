<!DOCTYPE html>
<?php
session_start();
include 'connect.php';
$totalincome=0;
$n=1;
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
        height: 100%;
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
      height: 100%;
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
      width:  100px;
      height:   100%;
      max-width:  200px;
      max-height:   100%;
    }
    .container{
      background:   #ffffff;   
    }
    .number{
      height:   50px;
      width:  50px;
    }
  </style>
</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='blank2.php'>Car</a></li>
   <li><a href='blank.php'>Dashboard</a></li>
   <li><a href='blank3.php'>Driver</a></li>
   <li><a href='#'>Absent</a></li>
</ul>
</div>
  <?php include 'form2.php' ?>
<div class="inside">
<div class="container">
  <div id="div1" class="table table-bordered">
    <table id="table1">
    <tr>
      <th class="number">No</th>
      <th>No.Pol</th>
      <th>Jenis</th>
      <th>Nama</th>
      <th>GPS Date</th>
      <th>Tgl STNK</th>
      <th>Absen</th>
      <th>Tgl Maintenance</th>
      <th>Income</th>
    </tr>
    </table>
  </div>
  <div id="div2" class="table table-bordered">
  <table id="table2">
    <?php $getItem=$koneksi->query("SELECT DISTINCT * from infomobil i,tabelmobil t where i.plat=t.plat"); while ($item = $getItem->fetch_assoc()) { ?>
    <tr>
      <th class="number"><?php echo $n ?></th>
      <th><a href="income.php?plat=<?php echo $item['plat'] ?>"><?php echo $item['plat'] ?></a></th>
      <th><?php echo $item['jenis'] ?></th>
      <th><?php echo $item['nama'] ?></th>
      <th><?php echo $item['gpsdate'] ?></th>
      <th><?php echo $item['tglstnk'] ?></th>
      <th><?php echo $item['absen'] ?></th>
      <th><?php echo $item['tglmaintenance'] ?></th>
      <th><?php echo $item['income'] ?></th>
    </tr>
                  <?php $n++; } ?>
  </table>
  </div>
  <div id="div1" class="table table-condensed">
    <table id="table1" class="  ">
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th><a href="#popupadd" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger" style="float:  right;">Delete</button></a></th>
      <th><a href="#popupadd" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger" style="float:  right;">Edit</button></a></th>
      <th><?php if (isset($_SESSION['isadmin'])): ?><a href="#popupadd" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger" style="float:  right;">Popup</button></a><?php endif ?></th>
    </tr>
  </table>
  </div>
</div>
</div>
</body>
</html>