<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>No Kudet Nes!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
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
      <h1><a href="#"><strong>No</strong>Kudet<strong> N</strong>ews</a></h1>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Film</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
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
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          
<?php  
    include "koneksi.php";  
   
$batas=10;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "select * from berita order by id_berita desc limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo"<li><img border=2 src='gambar/$r[gambar]' border=0 width=600 height=280> 
<div class='panel-overlay'>
 <h2><a href='readmore.php?id=$r[id_berita]'>$r[judul].</a></h2>
<p> ".substr($r['isi_berita'],0,150)." .....<a href='readmore.php?id=$r[id_berita]'>Read More &raquo;</a> </p> </div></li>"; 
      
    } 

?>   

       </ul>
      </div>
    </div>
   


 <div class="column">
      <ul class="latestnews">
<?php  
    include "koneksi.php";  
   
$batas=3;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "select * from berita 
order by id_berita desc   limit $posisi,$batas ");
while($r=mysqli_fetch_array($query))
{



    echo"<li><img border=2 src='gambar/$r[gambar]' border=0 width=100 height=100> 
 <p><strong><a href='readmore.php?id=$r[id_berita]'>$r[judul]</a></strong><br>
<p> ".substr($r['isi_berita'],0,100)." .....<a href='readmore.php?id=$r[id_berita]'>Read More</a> </p> </li>"; 
      
    } 

?>

      </ul>
    </div>
    


<br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!--kiri atas -->
<?php  
    include "koneksi.php";  
   
$batas=1;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '".$_GET['id']."'  order by id_berita desc  limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo"<div class='fl_left'>
 <h2><a href='#'>Artikel &raquo;</a></h2>
<img border=2 src='gambar/$r[gambar]' border=0 width=100 height=100> 
 <p><strong><a href='index'>$r[judul_berita].</a></strong></p>
<p> ".substr($r['isi_berita'],0,200)." .....<a href='readmore.php?id=$r[id_berita]'>Read More</a> </p> </div>"; 
      
    } 

?>   

<!--kanan atas-->
<?php  
    include "koneksi.php";  
   
$batas=1;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '".$_GET['id']."'  order by id_berita desc limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo"<div class='fl_right'>
 <h2><a href='#'>Olahraga &raquo;</a></h2>
<img border=2 src='gambar/$r[gambar]' border=0 width=100 height=100> 
 <p><strong><a href='index'>$r[judul_berita].</a></strong></p>
<p> ".substr($r['isi_berita'],0,200)." .....<a href='readmore.php?id=$r[id_berita]'>Read More</a> </p> </div>
     <br class='clear' />
"; 
      
    } 

?>   

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>Berita Terbanyak dibaca</h2>
        <ul>
<?php  
    include "koneksi.php";  
   
$batas=3;
$paging=@$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}

else{
	$posisi=($paging-1) * $batas;
	}
$query=mysqli_query($koneksi, "select * from berita 
order by id_berita desc  limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo"<li><img border=2 src='gambar/$r[gambar]' border=0 width=190 height=130> 
<p> ".substr($r['isi_berita'],0,200)." .....<a href='readmore.php?id=$r[id_berita]'>Read More</a> </p> </li>"; 
      
    } 

?>   

          
                  </ul>
        <br class="clear" />
      </div>
    </div>
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
$query=mysqli_query($koneksi, "select * from kategori,berita 
where berita.kategori=1=kategori.id_kategori order by id_berita desc  limit $posisi,$batas");
while($r=mysqli_fetch_array($query))
{



    echo" <ul><li><a href='readmore.php?id=$r[id_berita]'>$r[judul_berita]</a>
 </ul></li>"; 
      
    } 

?>   
  </div>

<div class="footbox">
<h2>FIlm</h2>

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
    <p class="fl_left">Copyright &copy; 2019 -No Kudet News- Design By Olivia dan Syilfa</a><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
