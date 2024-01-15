<?php
	include("function/session.php");
	include("db/dbconn.php");
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
		<img src="img/about2.jpg" style="width:1150px; height:250px; border:1px solid #000; ">
	<br />
	<br />


	<div class="content">
    <h2>Despre Formula 1</h2>
    <p>
      Formula 1 (F1) este cea mai înaltă clasă de curse auto monoposturi recunoscută de Federația Internațională de Automobilism (FIA). A fost lansată în 1950 și a devenit unul dintre cele mai prestigioase și urmărite campionate sportive din lume.
      Formula 1 (abreviată F1) este o întrecere de automobilism care se organizează anual sub forma a două campionate mondiale, care au loc în paralel, ambele fiind patronate de Federația Internațională a Automobilului (FIA). Cele două campionate sunt Campionatul Mondial al Piloților (engl: World Drivers' Championship) și Campionatul Mondial al Constructorilor (engl. World Constructors' Championship). Numele de Formula provine de la faptul că toate echipele înscrise în campionat trebuie să își construiască mașinile (cunoscute și sub numele de monoposturi) după un anumit regulament, o formulă pe care o decide FIA. Cifra 1 provine de la faptul ca întrecerea este catalogată drept cea mai prestigioasă formulă organizată de FIA. 
    </p>

    <h2>Istorie</h2>
    <p>
      Primul sezon al Campionatului Mondial de Formula 1 a avut loc în 1950, la patru ani după ce Federația Internațională a Automobilului a decis înființarea sa, fiind dominat de echipa Alfa Romeo, primul campion mondial fiind Giuseppe Farina. Tot Alfa Romeo a dominat și cea de-a doua ediție a campionatului, când campion mondial a devenit Juan Manuel Fangio. 
      <img src="https://media.prosport.ro/6quL6raZ6E_v165uy0OCn5C7lSo=/1280x720/smart/filters:contrast(5):format(webp):quality(80)/https%3A%2F%2Fwww.prosport.ro%2Fwp-content%2Fuploads%2F2020%2F05%2Ff1-history.jpg">

    </p>

    <h2>Circuite </h2>
    <p>
      Formula 1 are un calendar de curse care include trasee clasice precum Monaco, Spa-Francorchamps, Silverstone, precum și trasee moderne precum Marina Bay Street Circuit din Singapore sau Yas Marina Circuit din Abu Dhabi.
      <img src="https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/97-f1-2021-season-circuit-guide-portugal.jpg" >
    </p>

    <h2>Echipe si Piloti</h2>
    <p>
      Campionatul implica echipe consacrate precum Mercedes, Ferrari, Red Bull Racing și altele, iar pilotii lor sunt unele dintre cele mai talentate si cunoscute nume din motorsport.
      Fiecare echipa are doi piloti care concureaza în fiecare sezon.
      <img src="https://res.sport.ro/assets/sport/2022/11/22/image_galleries/766245/cum-arata-echipele-si-calendarul-pentru-formula-1-in-2023-vettel-s-a-retras-revine-cursa-din-las-vegas_12.jpg">
    </p>

    <h2>Regulamente si tehnologie</h2>
    <p>
      Formula 1 are regulamente stricte pentru a mentine competiia echitabila și sigura.
      Tehnologia din spatele masinilor de Formula 1 este de ultima generatie, incluzand motoare hibride, sasiuri aerodinamice si sisteme avansate de gestionare a datelor.
    </p>

    <h2>Campionate</h2>
    <p>
      Campionatul Mondial de Formula 1 include Campionatul Mondial al Pilotilor si Campionatul Mondial al Constructorilor.
    </p>

    <h2>Evenimente Majore</h2>
    <p>
      Cele mai importante evenimente includ Marele Premiu al Monaco-ului, Marele Premiu al Italiei, Marele Premiu al Marii Britanii si Marele Premiu al Statelor Unite.
      <img src="https://cacheimg.gsp.ro/autocrop/smp-images-production/gsp.ro/02102022/431bb752-a45e-476e-ad93-ba26c73af6d5.jpg?width=848&height=0">
    </p>

    <h2>Prestigiu si Audienta</h2>
    <p>
      Formula 1 atrage o audienta globala imensa si este asociata cu prestigiu, tehnologie avansata si viteze uluitoare.
    </p>

    <h2>Schimbari recente</h2>
    <p>
      Formula 1 sufera în mod constant modificari în regulamente si tehnologii pentru a ramane in pas cu progresul si pentru a mentine interesul fanilor.
    </p>

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
