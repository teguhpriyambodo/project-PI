<?php
	// session_start();
	
	if(isset($_COOKIE['user']) && $_COOKIE['user'] == 'login'){
	?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Go_Jepret</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" href="dist/img/Really-old-icons-icon.png">
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1>Go_Jepret</h1>
          <h2>Jasa Pemesanan Fotografer Online</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav"> 
          <li><a href="halamanawal.html">Home</a></li>
		  <li><a href="galeri.html">Galeri</a></li>
		   <li><a href="alamat.html">Alamat Studio</a></li>
		    <li><a href="transaksi.html">Transaksi</a></li>
         </ul>
		<br/> 

			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Search for...">
			  <span class="input-group-btn">
				<button class="btn btn-default" type="button">Go!</button>
			  </span>
			</div><!-- /input-group -->

      </nav>
	</header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/new/1.jpg" width="600" height="300" alt="" /></li>
        <li><img src="images/new/2.jpg" width="600" height="300" alt="" /></li>
        <li><img src="images/new/3.jpg" width="600" height="300" alt="" /></li>
        <li><img src="images/new/4.jpg" width="600" height="300" alt="" /></li>
        <li><img src="images/new/5.jpg" width="600" height="300" alt="" /></li>
      </ul>
	  
      <div class="content">
        <h1>Selamat datang dihalaman Go_Jepret</h1>
        <p>memudahkan anda untuk mencari fotografer profesional</p>
      </div>
    </div>

    <footer>
      <p>Copyright &copy; CSS3_seascape_two | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
<?php
	} else {
	header("location:login.php");
	}

		<?php 
		include "koneksi.php";
		$nama = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$no_telp = $_POST['no_telp'];
		$reg = $db->prepare('INSERT INTO tabel_member VALUES (NULL,?,?,?,?)');
		$reg->execute(array($email,$password,$nama,$no_telp));

		?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!! Sekarang anda bisa Log In...!!");
	</script>