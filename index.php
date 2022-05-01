<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbbrian");

//ambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM formpesan");
// var_dump($result);

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- My Fonts -->
	<link rel="stylesheet" type="text/css" href="fonts/webfonts/Montserrat.css">
	<link rel="stylesheet" type="text/css" href="fonts/webfonts/lato.css">
	<!-- <link rel="stylesheet" href="fonts/lato/lato.css"> -->

	<!-- My CSS	-->
	<link rel="stylesheet" href="css/style.css">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


	<!--flaticon CSS-->
	<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">

	<title>Brian Rahmarela Website</title>
</head>

<body>
	<?php
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
		if ($pesan == "input") {
			echo "Data berhasil di input.";
		} else if ($pesan == "update") {
			echo "Data berhasil di update.";
		} else if ($pesan == "hapus") {
			echo "Data berhasil di hapus.";
		}
	}
	?>

	<!--AWAL HOME-->
	<section class="home" id="home">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container-fluid">
				<!--<a class="navbar-brand" href="#">Brian Rahmarela</a>-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<div id="wrapper">
						<div class="circle icon">
							<span class="line top"></span>
							<span class="line middle"></span>
							<span class="line bottom"></span>
						</div>
					</div>
				</button>
				<div class="collapse navbar-collapse mr-5 pr-5" id="navbarNavAltMarkup">
					<ul class="navbar-nav ml-auto mr-5">
						<li class="nav-item active">
							<a class="nav-link scroll" href="#home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link scroll" href="#contact">Contact</a>
						</li>
					</ul>
					<!--<div class="navbar-nav ml-auto mr-5">
			  <a class="nav-item nav-link active scroll" href="#home">Home <span class="sr-only">(current)</span></a>
			  <a class="nav-item nav-link scroll" href="#services">Services</a>
			  <a class="nav-item nav-link scroll" href="#aboutme">About Me</a>
				<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</div>-->

				</div>
			</div>
		</nav>
		<!-- Akhir Navbar -->

		<!-- Awal Landing Page -->
		<section class="landingpage ">
			<!-- Headline -->
			<div class="container-fluid">
				<div class="row justify-content-center kotakimages mt-5">
					<div class="col-lg-7 kotakimagescol1">
						<img src="images/cropcirclebrian.png" alt="Responsive image" class="img-fluid">
					</div>
					<div class="col-lg-1 kotakimagescol2">
					</div>
					<div class="col-lg-2 kotakimagescol3">
						<img src="images/circlephoto.png" alt="Responsive image" class="img-fluid">
					</div>
				</div>

				<!-- Judul -->
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<h1 class="headlinehello">HELLO,</h1>
						<h4 class="datadiri">I'm Brian Rahmarela, Full Stack Web Developer from Depok, Indonesia.
							Proficient in Javascript, html, css, php, React JS, Bootstrap, Node JS, Express Js & Rest API. I use Mongo DB & MySql for database.</h4>
						<a href="#" class="arrow">
							<i class="fas fa-arrow-down" style="color:#FE3F12;margin-right: 10px"></i>
							<!-- <i class="fa fa-chevron-down" style="color:#FE3F12;margin-right: 10px"></i> -->
						</a>
						<a href="images/cvbrian.jpg" download class="downloadcv">
							<p>Download my CV</p>
						</a>
					</div>
					<div class="col-lg-3">
					</div>
				</div>
				<!-- Akhir Judul -->

				<div class="row justify-content-center">
					<div class="col-lg-4 mt-3">
						<!--<button type="button" class="btn btn-primary">PORTFOLIO</button>-->
						<!--<button type="button" class="btn btn-outline-dark">CONTACT ME</button>-->
						<!--<button type="button" class="btn btn1">PORTFOLIO</button>-->
						<a class="btn btn btn1" href="indexport.php" role="button">PORTFOLIO</a>
						<button type="button" class="btnb btn2">ABOUT ME</button>
						<!-- <a href="https://wa.me/6281282306950?text=Halo%20Brian!%20saya%20ingin%20memesan%20" target="_blank" class="float" style="z-index: 9999"> -->
						<!-- <i class="fa fa-whatsapp fa-2x" style="margin-top:15px"></i> -->
						<!-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
					width="32" height="32" style="margin-top:14px"
					viewBox="0 0 172 172"
					style=" fill:#000000;"><g fill="none" fill-rule="none" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none" fill-rule="nonzero"></path><g fill="#ffffff" fill-rule="evenodd"><path d="M131.70849,40.33349c-12.13574,-12.13574 -28.26074,-18.83349 -45.43555,-18.83349c-35.39941,0 -64.22705,28.80664 -64.22705,64.20606c-0.021,11.31689 2.93945,22.36084 8.56641,32.10303l-9.11231,33.27881l34.05567,-8.94433c9.36426,5.12305 19.94629,7.81055 30.69629,7.83154h0.02099c35.39942,0 64.20606,-28.80664 64.22705,-64.22705c0,-17.15381 -6.67676,-33.27881 -18.79151,-45.41455zM86.27295,139.12012h-0.02099c-9.57422,0 -18.98047,-2.58252 -27.16894,-7.43262l-1.95264,-1.15479l-20.21923,5.29102l5.39599,-19.69433l-1.25977,-2.01562c-5.35401,-8.50342 -8.16748,-18.32959 -8.16748,-28.40771c0,-29.41553 23.95654,-53.35108 53.41406,-53.35108c14.25634,0 27.65185,5.56397 37.72998,15.64209c10.07813,10.09912 15.62109,23.49462 15.62109,37.75097c0,29.43653 -23.95654,53.37207 -53.37207,53.37207zM115.54151,99.14356c-1.5957,-0.79785 -9.49023,-4.68213 -10.95996,-5.20703c-1.46972,-0.5459 -2.54053,-0.79785 -3.61133,0.79785c-1.0708,1.6167 -4.13623,5.22803 -5.08105,6.29883c-0.92383,1.04981 -1.86865,1.19678 -3.46435,0.39893c-1.6167,-0.79785 -6.78174,-2.49854 -12.9126,-7.97852c-4.76611,-4.24121 -7.99951,-9.51123 -8.92334,-11.10693c-0.94483,-1.6167 -0.10498,-2.47754 0.69287,-3.27539c0.73486,-0.71387 1.6167,-1.86866 2.41455,-2.81348c0.79785,-0.92383 1.0708,-1.5957 1.6167,-2.66651c0.5249,-1.0708 0.25195,-2.01562 -0.14697,-2.81347c-0.39893,-0.79785 -3.61133,-8.71338 -4.95508,-11.92578c-1.30176,-3.12842 -2.62451,-2.6875 -3.61133,-2.75049c-0.92383,-0.04199 -1.99463,-0.04199 -3.06543,-0.04199c-1.0708,0 -2.81348,0.39892 -4.2832,2.01563c-1.46973,1.5957 -5.60596,5.47998 -5.60596,13.37451c0,7.89453 5.75293,15.53711 6.55078,16.60791c0.79785,1.0498 11.3169,17.25879 27.4209,24.20849c3.82129,1.65869 6.80273,2.64551 9.1333,3.38037c3.84229,1.21778 7.34864,1.04981 10.12012,0.65088c3.08642,-0.46192 9.49023,-3.88428 10.83398,-7.64258c1.32275,-3.73731 1.32275,-6.94971 0.92383,-7.62158c-0.39893,-0.67187 -1.46973,-1.0708 -3.08643,-1.88965z"></path></g></g></svg> -->
						</a>
					</div>
					<div class="col-lg-3">
					</div>
				</div>
			</div>
			<!-- Akhir Headline -->
		</section>
		<!-- Akhir Landing Page -->
	</section>
	<br>
	<br>
	<br>
	<hr>
	<!--AKHIR HOME -->

	<!--AWAL SERVICES-->
	<section class="services" id="services">
		<div class="container-fluid ">
			<div class="row justify-content-center mt-5">
				<div class="col-lg-7">
					<h3>SERVICES</h3>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-lg-2">
					<div class="iconinner">
						<i class="flaticon-responsive-1"></i>
					</div>
					<h5>Frontend Development Web</h5>
					<p>Using the development platform to create bespoke web/app solutions. Our flawless web designs will guide the user intuitively and will display perfectly on every device. </p>
				</div>
				<div class="col-lg-2">
					<div class="iconinner">
						<i class="flaticon-ui"></i>
					</div>
					<h5>UI/UX Design</h5>
					<p>Specializes in brand identity, UI design, development, and art direction. we’re able convert your ideas effortlessly into visually appealing & user friendly iOS and Android apps.</p>
				</div>
				<div class="col-lg-2">
					<div class="iconinner">
						<i id="rspnsvatur" class="flaticon-responsive-design"></i>
					</div>
					<h5>Responsive Web Design</h5>
					<p>Designing and developing a website with flexible layouts that adapt to each user's device. Websites with responsive design will adapt and display on any device or screen size.</p>
				</div>
				<div class="col-lg-1">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-2">
					<div class="iconinner">
						<i class="flaticon-layers"></i>
					</div>
					<h5>Graphic Design</h5>
					<p>We create’s graphic design work can be used for websites, packaging, brochures, flyers, business cards, advertisements and more.</p>
				</div>
				<div class="col-lg-2">
					<div class="iconinner">
						<i class="flaticon-video-edition-1"></i>
					</div>
					<h5>Motion Graphic</h5>
					<p>We can work in different style to better suit our clients briefs. Every video we create has custom made design and animations.</p>
				</div>
				<div class="col-lg-2">
					<div class="iconinner">
						<i class="flaticon-layout-2"></i>
					</div>
					<h5>Layout Design</h5>
					<p>We provides services involving book layout design, magazine layouts (including cover). Specific layout and formatting services include.</p>
				</div>
				<div class="col-lg-1">
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<hr>
	<!--AKHIR SERVICES-->

	<!--AWAL CONTACT-->
	<form action="inputproses.php" method="POST">
		<section class="contact" id="contact">
			<div class="container-fluid">
				<div class="row justify-content-center mt-5">
					<div class="col-lg-7">
						<h3>CONTACT</h3>
					</div>
				</div>
				<div class="row justify-content-center mt-5">
					<div class="col-lg-2">
						<h5>Call me</h5>
						<p>+62 812 8230 6950<br><a href="https://wa.me/6281282306950?text=Halo%20Brian!%20saya%20ingin%20memesan%20" target="_blank" id="wa" style="color: #FE3F12; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 13.2px; color: #FE3F12; text-transform: uppercase; text-decoration: underline">Whatsapp Me</a></p>


					</div>
					<div class="col-lg-2">
						<h5>Email me</h5>
						<p id="paturemail">mail@brianrahmarela.com/<br>brian.rahmarela@gmail.com</p>
					</div>
					<div class="col-lg-2">
						<h5>Visit me</h5>
						<p>Jl. Danau Tempe 5 no 12, Depok Timur,<br>Jawa Barat, Indonesia</p>
					</div>
					<div class="col-lg-1">
					</div>
				</div>
				<div class="row justify-content-center mt-3">
					<div class="col-lg-2">
						<div class="form-grup mb-3">
							<label for="nama">Name</label>
							<input type="text" id="nama" name="nama" class="form-control" placeholder="Your name">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-grup mb-3">
							<label for="email">Email</label>
							<input type="email" id="Your email" name="email" class="form-control" placeholder="Email address">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="form-grup mb-3">
							<label for="subject">Subject</label>
							<input type="text" id="Your subject" name="subject" class="form-control" placeholder="Your subject">
						</div>
					</div>
					<div class="col-lg-1">
					</div>
				</div>

				<div class="row justify-content-center mt-5">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Select service</label>
							<select class="form-control" id="exampleFormControlSelect1" name="service">
								<option value="1">Frontend Development Web</option>
								<option value="2">UI/UX Design</option>
								<option value="3">Responsive Web Design</option>
								<option value="4">Graphic Design</option>
								<option value="5">Motion Graphic</option>
								<option value="6">Layout Design</option>
							</select>
						</div>
					</div>
					<div class="col-lg-1">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="exampleFormControlTextarea1"></label>
							<textarea class="form-control" id="exampleFormControlTextarea1" name="pesan" rows="10" placeholder="Message…"></textarea>
						</div>
					</div>
					<div class="col-lg-1">
					</div>
				</div>
				<div class="row justify-content-center mb-5">
					<div class="col-lg-6">
						<button type="submit" class="btn btn1" id="btnsubmitcustom">SUBMIT MESSAGE</button>
					</div>
					<div class="col-lg-1">
					</div>
				</div>
			</div>
		</section>
	</form>
	<!--AKHIR CONTACT-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!--    <script src="js/jquery-3.3.1.slim.min.js"></script>-->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript">
		$("#wrapper").click(function() {
			$(".icon").toggleClass("close");
		});
	</script>
</body>

</html>