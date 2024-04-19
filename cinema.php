<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/cinema.css">


	<?php include('requette.php'); ?>

</head>

<body>

	<div class="nav">

		<img class="logo" src="logo.png" alt="Logo-cinema" width="10% " height="10%">


		<div class="titre2">
			<h4 id="titre">Film</h4>
			<h4 id="titre">Genres</h4>
			<h4 id="titre">Producteurs</h4>

		</div>
		<form method="POST" action="">
			<input class="barre" type="text" name="Film" placeholder="Recherche de film">
	</div>


	</div>
	<!-- <div class="slider-container slider-1">
		<div class="slider">

			<p><img src="/img1.png" alt=""></p>
			<p><img src="/img2.png" alt=""></p>
			<p><img src="/img3.png" alt=""></p>
			<p><img src="/img4.png" alt=""></p>
			<p><img src="/img5.png" alt=""></p>
			<p><img src="/img6.png" alt=""></p>
		</div>
	</div> -->

	<nav>
		<div class="tout">
			<div class="prod">
				<h2>Par Productuer</h2>

				<form method="POST" action="">
					<input class="barre2" type="text" name="dist" placeholder="recherche par productuer">

					<div class="resultat">
						<?php afficher() ?>


					</div>
			</div>
			<div class="genre">

				<h2>Genres</h2>

				<select id="genre" name="genre">
					<option value="">Choisir son film</option>
					<?php option() ?>
				</select>
				</form>
			</div>
			<div class="men">
				<h2>Les Membres</h2>
				<div class="menbre">
					<form method="POST" action="">
						<input class="barre2" type="text" name="menbre" placeholder="recherche par sub">
						<?php membre() ?>

					</form>
				</div>


			</div>
	</nav>

	<div>

		<a class="page" href="sub.php"><button class="ad">Admin</button></a>
	</div>
	<script src="/chargement.js"></script>
</body>

</html>