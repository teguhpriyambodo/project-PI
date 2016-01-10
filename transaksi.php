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
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>Go_Jepret</h1>
          <h2>Jasa Pemesanan Fotografer Online</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">          
          <li><a href="halamanawal.php">Home</a></li>
		  <li><a href="galeri.html">Galeri</a></li>
          <li><a href="transaksi.php">Transaksi</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
		<br/>
			<div class="input-group">
			  <input type="text" class="form-control" placeholder="Cari">
			  <span class="input-group-btn">
				<button class="btn btn-default" type="button">Cari</button>
			  </span>
			</div>
      </nav>
    </header>
    <div>
    <div id="site_content">
		<div class="content">
	<h2>Silahkan isikan data anda untuk memulai transaksi</h2>
        <form action="transaksi-proses.php" method="post">
          <div class="form_settings">
            <p><span>Tanggal Booking</span><select class="tgllahir" name="tanggal">
								<option value="Tanggal" selected>Tanggal</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select> 
							<select class="tgllahir" name="bulan">
								<option value="Bulan" selected>Bulan</option>
								<option value="Januari">Januari</option>
								<option value="Februari">Februari</option>
								<option value="Maret">Maret</option>
								<option value="April">April</option>
								<option value="Mei">Mei</option>
								<option value="Juni">Juni</option>
								<option value="Juli">Juli</option>
								<option value="Agustus">Agustus</option>
								<option value="September">September</option>
								<option value="Oktober">Oktober</option>
								<option value="November">November</option>
								<option value="Desember">Desember</option>
							</select>
							<select class="tgllahir" name="Tahun">
								<option value="Tahun" selected>Tahun</option>
								<option value="2014">2016</option>
								<option value="2014">2015</option>
							</select>
			</p>
	        <p><span>Alamat Tempat Pemotretan</span><input type="text" name="alamat" value="" placeholder="Alamat Tempat Pemotretan" /></p>
            <p><span>Nama</span><input type="text" name="alamat" value="" placeholder="Nama Lengkap" /></p>
		    <p><span>No Telp</span><input type="text" name="alamat" value="" placeholder="No Telp" /></p>
			<p> pastikan data anda sudah benar!!! </p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="OK" /></p>
          </div>
        </form>
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
