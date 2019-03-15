<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalkulator BMI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-container-contact100" style="background-image: url(images/unicorn.jpg);">
		<div class="contact100-header flex-sb-m">
		<form class="contact100-form validate-form" action=index.php method=post>	
			<!-- <a href="#" class="contact100-header-logo">
				<img src="images/icons/logo.png" alt="LOGO">
			</a> -->

			<!-- <div>
				<button class="btn-show-contact100">
					Kalkulator BMI
				</button>
			</div> -->
		</div>
	</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<!-- <button class="btn-hide-contact100">
				<i class="zmdi zmdi-close"></i>
			</button> -->

			<div class="contact100-form-title" style="background-image: url(images/unicorn2.jpg);">
				<span>Kalkulator BMI</span>
			</div>

			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input">
					<input id="nama" class="input100" type="text" name="nama" placeholder="Isikan Nama Anda">
					<span class="focus-input100">Nama</span>
					<label class="label-input100" for="nama">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input id="tinggi" class="input100" type="text" name="tinggi" placeholder="Isikan Tinggi Badan Anda" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
					<span class="focus-input100">Tinggi</span>
					<label class="label-input100" for="tinggi">
					<span class="lnr lnr-smile"></span>
					</label>
				</div>

				
				<div class="wrap-input100 validate-input">
					<input id="berat" class="input100" type="text" name="berat" placeholder="Isikan Berat Badan Anda" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
					<span class="focus-input100">Berat</span>
					<label class="label-input100" for="berat">
					<span class="lnr lnr-dinner"></span>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="hitung" value="hitung">
						Hitung
					</button>
				</div>
			</form>
					<?php
						if(!empty($_POST['hitung'])) { 
					    $berat = $_POST['berat'];
					    $tinggi = $_POST['tinggi'];
					    function bmi($berat,$tinggi) {
					        $bmi = $berat/($tinggi*$tinggi);
					        return $bmi;
					    }   
					    $bmi = bmi($berat,$tinggi);
					    if ($bmi <= 18.5) {
					        $output = "UNDERWEIGHT";
					        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
					        $output = "NORMAL WEIGHT";
					        } else if ($bmi > 24.9 AND $bmi<=29.9) {
					        $output = "OVERWEIGHT";
					        } else if ($bmi > 30.0) {
					        $output = "OBESE";
					    }
					    echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
					    echo "$output";
					}
					?> 
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
