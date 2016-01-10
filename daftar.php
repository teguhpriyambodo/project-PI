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
          
          <li><a href="daftar.php">Daftar</a></li>
		   
        </ul>
      </nav>
    </header>
    <div class="container"; align="center">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                    <h2 class="intro-text text-center"><STRONG>DAFTAR</STRONG></h2>
					
					<div class="col-sm-4 col-sm-offset-4">
						<form action="daftar-aksi.php" method="POST">
						<div>
							<label>Username : </label>
							<input type="text" placeholder="Username" name="username">
						</div>
						<div>
							<label>Password : </label>
							<input type="password" placeholder="Password" name="password">
						</div>
						<div>
							<label>Email : </label>
							<input style="width:135px;margin-left:10px;margin-right:50px" type="text" placeholder="Email" name="email">
						</div>
						<div>
							<label>No_Telp/Hp : </label>
							<input type="text" placeholder="No Telepon/HP" name="no_telp">
						</div>
						<div>
							<label>Alamat : </label>
							<textarea type="text" placeholder="Alamat" name="alamat"></textarea>
						</div>
						<br/>
							<button type="submit" name="submit" class="btn btn-default">Submit</button>
					</form>
					</div>
                </div>
            </div>
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
