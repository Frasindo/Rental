<!DOCTYPE html>
<?php
include 'connect.php';
$nincome=1;
$nservice=1;
$totalcost=0;
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
		display: block;
	}
	.side1{
		height: 50%;
		width: 100%; 
		float: none;
		background: #000;
		margin: 10px;
		text-align: center;
		display: block;
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
    #dtm2{
    	height: 45%;
    	width: 100%;
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
	</style>
</head>
<body>
	
<div class="wrap" >
	<div class="header"></div>
	<div class="body">
		wow
	</div>
	<div class="sidebar">
		<div class="side1"><h2>Data Service</h2>
		wow
		<div class="side1"><h2>Data Mobil</h2>
		wow
		</div>
	</div>
</div>
</body>
</html>