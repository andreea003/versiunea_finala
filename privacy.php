<?php
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Circuit Cuture</title>
	<link rel="icon" href="img/logo1.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="header">
		<img src="img/logo1.jpg">
		<label>Circuit Cuture</label>
			<ul>
				<li><a href="#signup"   data-toggle="modal">Sign Up</a></li>
				<li><a href="#login"   data-toggle="modal">Login</a></li>
			</ul>
	</div>

	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>

	<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						<input type="text" name="country" placeholder="Province" required>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>

	<br>
<div id="container">
	<div class="nav">
			 <ul>
				<li><a href="index.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus.php">   <i class="icon-bookmark"></i>Formula 1</a></li>
				<li><a href="contactus.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>




		<div id="content">
			<legend><h3>Privacy Policy</h3></legend>
			<p>Circuit Cuture respectă confidențialitatea vizitatorilor
pe site-ul Online Shoe Store.com și pe site-urile web locale conectate cu acesta și aveți mare grijă să vă protejați
informații.. Această politică de confidențialitate vă spune ce informații colectăm de la dvs., cum le putem folosi și
pașii pe care îi luăm pentru a ne asigura că este protejat.
				</p>
			<hr>
				<h4>Protection of visitors information</h4>
					<p>Pentru a proteja informațiile pe care ni le furnizați vizitând site-ul nostru web, am implementat diverse
masuri de securitate. Informațiile dvs. personale sunt conținute în spatele rețelelor securizate și sunt doar accesibile
de un număr limitat de persoane, care au drepturi speciale de acces și sunt obligate să păstreze informațiile
confidențial. Vă rugăm să rețineți că ori de câte ori oferiți informații personale online există un
riscul ca terții să intercepteze și să utilizeze aceste informații. În timp ce Magazinul de pantofi online se străduiește să-i protejeze pe utilizatorii săi
informații personale și confidențialitate, nu putem garanta securitatea oricărei informații pe care le dezvăluiți online
și o faci pe propriul tău risc.</p>
			<hr>
				<h4>Use of cookies</h4>
					<p>Un cookie este un șir mic de informații pe care site-ul web pe care îl vizitați le transferă pe computerul dumneavoastră
scopuri de identificare. Cookie-urile pot fi folosite pentru a vă urmări activitatea pe site și acele informații
ne ajută să vă înțelegem preferințele și să vă îmbunătățim experiența pe site. Cookie-urile sunt, de asemenea, folosite pentru
amintiți-vă, de exemplu, numele dvs. de utilizator și parola.</p>
					<p>Puteți dezactiva toate cookie-urile, în cazul în care preferați să nu le primiți. Puteți, de asemenea, să vă avertizeze computerul
dvs. ori de câte ori sunt utilizate cookie-uri. Pentru ambele opțiuni trebuie să ajustați setările browserului
(cum ar fi Internet Explorer). Există, de asemenea, produse software disponibile care pot gestiona cookie-urile pentru dvs.
Vă rugăm să rețineți că, atunci când ați setat computerul să respingă cookie-urile, acesta poate limita
funcționalitatea site-ului web pe care îl vizitați și este posibil ca atunci să nu aveți acces la unele dintre ele
caracteristici de pe site.</p>
			<hr>
				<h4>Online policy</h4>
					<p>Politica de confidențialitate nu se extinde la nimic inerent în funcționarea internetului și
prin urmare, dincolo de controlul adidas și nu trebuie aplicat în nici un mod contrar legii aplicabile sau
reglementare guvernamentală. Această politică de confidențialitate online se aplică numai informațiilor colectate prin intermediul nostru
site-ul web și nu la informațiile colectate offline.</p>

		</div>
	<br />
</div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> &copy; 2023 Circuit Cuture.</label>
		</div>
	</div>
</body>
</html>
