<?php
include'koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elektronik ARSIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bs/bootstrap.min.css" rel="stylesheet">
  <script src="bs/bootstrap.bundle.min.js"></script>
<style type="text/css">
    *{margin:0px auto;padding:5px;}
    .footer{
        height: 50px;
        background-color: rgb(225, 218, 218);
        text-align: center;
        padding-top: 7px;
    }
    .col-sm-9{
        font-size: 16px;
    }
    .col-sm-3{
      text-align:justify; margin-left:0px;
    }
    .header{
      background-color: rgb(37, 36, 36);
      text-align: center;
      color: aliceblue;
      height: 150px;
      padding-top: 50px;
    }
   
    ul{list-style:none;margin:10px; }
    li{ dotted black; margin-bottom:5px;padding-left:5px;}
    a:link{text-decoration:none;color:black}
    a:visited{text-decoration:none;color:black}
    a:hover{text-decoration:none;color:blue}
    



</style>
</head>

<body>

<div class="header">
  <h1>APLIKASI PENGOLAHAN DATA ARSIP </h1>
  <p></p> 
</div>
<div class="container mt-5">
  <div class="row">
   <!--bs floating label bs grid bs images-->
   <div class="col-sm-3">

			
			<ul>
        <div class="d-grid"><button type="button" class="btn btn-outline-dark">Managemen Data</button></div>
          <li> <a href="index.php?p=beranda"><img src="images/a (3).png" width="40px">Beranda </a> </li>
				  <li><a href="index.php?p=staf"><img src="images/a (3).png" width="40px">Data Staf</a></li>
          <li><a href="index.php?p=user"><img src="images/a (3).png" width="40px">Data User</a></li>
          <li><a href="index.php?p=surat"><img src="images/a (3).png" width="40px">Data Surat</a></li>
				  <li><a href="logout.php"><img src="images/a (3).png" width="40px">Logout</a></li>
		    </div>
    <div class="col-sm-9">
  
    <?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
                    echo"<p></p>";
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?> 

</div></div></div>
<div class="footer">
    Copyright &copy; | Elektronik Arsip 2022
</div>

</body>
</html>
<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>