<?php
	include("function/session.php");
	include("db/dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Circuit Cuture</title>
	<link rel="icon" href="img/1.jpg" />
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

			<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

			<ul>
				<li><a href="function/logout.php"><i class="icon-off icon-white"></i>logout</a></li>
				<li>Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-white"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a></li>
			</ul>
	</div>

	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];

								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = $query->fetch_array ();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>



	<br>
<div id="container">
	<div class="nav">
			 <ul>
				<li><a href="home.php">   <i class="icon-home"></i>Home</a></li>
				<li><a href="product1.php"> 			 <i class="icon-th-list"></i>Product</a></li>
				<li><a href="aboutus1.php">   <i class="icon-bookmark"></i>Formula 1</a></li>
				<li><a href="contactus1.php"><i class="icon-inbox"></i>Contact Us</a></li>
				<li><a href="privacy1.php"><i class="icon-info-sign"></i>Privacy Policy</a></li>
				<li><a href="faqs1.php"><i class="icon-question-sign"></i>FAQs</a></li>
			</ul>
	</div>

	<br />
	<br />

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
</div>
	<br />
<div>
	<br />
	<div id="footer">
		<div class="foot">
			<label style="font-size:17px;"> &copy; 2023 Circuit Cuture.</label>
		</div>
	</div>
</body>
</html>
