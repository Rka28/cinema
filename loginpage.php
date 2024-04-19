<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div>



<?php include('requette.php'); ?>





<div>
	<div class="tete">

		<img class="logo" src="logo cinema.png" alt="Logo-cinema">

		<div class="film">
			<h2 id="titre">FILM</h2>
			<div>

				<form method="POST" action="">
					<input class="barre" type="text" name="Film" placeholder="Recherche de film"><button id="button1"><img src="rechercher.png " alt=""></button>

			</div>
		</div>

	</div>
</div>
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
</div>
</body>
</html>