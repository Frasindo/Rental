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
   <li class='active'><a href='blank.php'>Dashboard</a></li>
   <li><a href='blank2.php'>Car</a></li>
   <li><a href='blank3.php'>Driver</a></li>
   <li><a href='#'>Absent</a></li>
</ul>
</div>
  <?php include 'form1.php'; ?>
<div class="insinde">
<div class="container">
  <div id="div1" class="table table-condensed">
    <table id="table1">
    <tr>
      <th class="number">No</th>
      <th >Tanggal</th>
      <th >Keterangan</th>
      <th >Debit</th>
      <th >Kredit</th>
    </tr>
    </table>
  </div>
  <div id="div2" class="table table-condensed">
  <table id="table2">
            <?php $getItem=$koneksi->query("SELECT * FROM debkret"); while ($item = $getItem->fetch_assoc()) { ?>
    <tr>
      <th class="number"><?php echo $n ?></th>
      <th ><?php echo $item['tanggal'] ?></th>
      <th ><?php echo $item['keterangan'] ?></th>
      <th ><?php echo $item['debit'];$totaldeb+=$item['debit']; ?></th>
      <th ><?php echo $item['kredit'];$totalkret+=$item['kredit'] ?></th>
    </tr>
              <?php $n++; } ?>
  </table>
  </div>
  <div id="div1" class="table table-condensed">
    <table id="table1" class="  ">
    <tr>
      <th>Total</th>
      <th></th>
      <th></th>
      <th><?php echo $totaldeb; ?></th>
      <th><?php echo $totalkret; ?></th>
    </tr>
    </table>
  </div>
      <?php if (isset($_SESSION['isadmin'])): ?>
        <a href="#popupadd"><button type="button" class="btn btn-outline-danger" style="float:  right; margin-top: 10px;">Add Cost</button></a>
      <?php endif ?>
</div>
<div>
</body>
</html>