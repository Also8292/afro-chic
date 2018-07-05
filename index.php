<!DOCTYPE html>
<html>
	<head>
		<title>ACCUEIL</title>
		<meta charset="UTF_8"/>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<header class="container-fluid header">
      <div class="container">
        <a href="#" class="logo">
          <img src="img/logo.jpg" alt="logo">
        </a>
        <nav class="menu">
          <ul>
            <li><a href="#">Accueil</a></li>
              <li>
                <a href="#modeles">Modeles</a>
                <ul>
                  <li>
                    <a href="#homme">Homme</a>
                  </li>
                  <li>
                    <a href="#femme">Femme</a>
                  </li>
                </ul>
              </li>
            <li><a href="#apropos">A Propos</a></li></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

		<div id="corps">
			<p><span class="slogan" style="font-family:algerian"><span style="color:black">Afro'Chic</span></span>
			<section id="slide">
				<img src="img/slider.gif" alt="" title="collection 2016-2017"/>
				<div class="inner">
					<h1>Habillez vous Chic et Africain</h1>
				</div>
			</section>
			<div id="modeles">
				<section class="photo_homme">
					<h1 id="homme" class="titrepartie">Modéles Homme</h1>
					<hr class="separateur">
					<a href="img/h1.jpg" title=""><img src="img/h1.jpg" alt="" /></a>
					<a href="img/h2.jpg" title=""><img src="img/h2.jpg" alt="" /></a>
					<a href="img/h3.jpg" title=""><img src="img/h3.jpg" alt="" /></a>
					<a href="img/h4.jpg" title=""><img src="img/h4.jpg" alt="" /></a>
					<a href="img/h5.jpg" title=""><img src="img/h5.jpg" alt="" /></a>
					<a href="img/h6.jpg" title=""><img src="img/h6.jpg" alt="" /></a>
					<a href="img/h7.jpg" title=""><img src="img/h7.jpg" alt="" /></a>
					<a href="img/h8.jpg" title=""><img src="img/h8.jpg" alt="" /></a>
					<a href="img/h9.jpg" title=""><img src="img/h9.jpg" alt="" /></a>
				</section>

				<section class="photo_femme">
					<h1 id="femme" class="titrepartie">Modéles Femme</h1>
					<hr class="separateur">
					<a href="img/f1.jpg" title=""><img src="img/f1.jpg" alt="" /></a>
					<a href="img/f2.jpg" title=""><img src="img/f2.jpg" alt="" /></a>
					<a href="img/f3.jpg" title=""><img src="img/f3.jpg" alt="" /></a>
					<a href="img/f4.jpg" title=""><img src="img/f4.jpg" alt="" /></a>
					<a href="img/f5.jpg" title=""><img src="img/f5.jpg" alt="" /></a>
					<a href="img/f6.jpg" title=""><img src="img/f6.jpg" alt="" /></a>
					<a href="img/f7.jpg" title=""><img src="img/f7.jpg" alt="" /></a>
					<a href="img/f8.jpg" title=""><img src="img/f8.jpg" alt="" /></a>
					<a href="img/f9.jpg" title=""><img src="img/f9.jpg" alt="" /></a>
				</section>
			</div>
		</div>

		<!-- A propos -->
		<div class="container-fluid about">
			<h1 id="apropos" class="titrepartie">A Propos</h1>
			<hr class="separateur">
			<p class="container">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>

		<div class="container-fluid contact">
			<h1 id="contact" class="titrepartie">Contact</h1>
			<hr class="separateur">
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 coordonnees">
				<h2>Nos coordonnées</h2>
				<p>Adresse : Hann Mariste xxxxxxxx</p>
				<p>Tel : +221 33 777 77 77 / +221 123 45 67</p>
				<p>Email : exemple@gmail.com</p>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 formulaire">
				<h2>Laissez un message !!!</h2>
				<form class="formulaire" action="post.php" method="post">
					<p><input type="text" name="nom" placeholder="Nom"></p>
					<p><input type="text" name="email" placeholder="Email"></p>
					<p><textarea name="message" placeholder="Message"></textarea></p>
					<p><input type="submit" name="" value="Envoyer"></p>
				</form>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 coordonnees">
				<h2>Réseaux sociaux !!!</h2>
				<a href="#"><img src="img/google.png" alt="google+"></a>
				<a href="#"><img src="img/facebook.png" alt="facebook"></a>
				<a href="#"><img src="img/twitter.png" alt="twitter"></a>
			</div>
		</div>

		<footer class="container-fluid">
			<p>Copyright (c) 2018, by @!$0. All right reserved !!!</p>
		</footer>
	</body>
</html>
