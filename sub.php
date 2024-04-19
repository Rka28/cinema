<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/sub.css">
</head>
<div>
				<div class="tete">
					
					<img  class="logo" src="logo cinema.png" alt="Logo-cinema">
					
					
					<h2 id="titread">ADMIN</h2>
					
					
				</div>
			</div>
			<nav>
				<div class="tout">
					<div class="prod">
						<h2>Pannel Admin</h2>
						
						<form method="POST" action="">
							<input class="barre2" type="text" name="utiliser" placeholder="recherche par sub">
							<button id="button1"><img src="rechercher.png "alt=""></button>
						</form>
								<div>

									<a class="page" href="cinema.php"><button class="as">Home</button></a>
								</div>
						
						

<nav class="page">
</nav>

	
</body>
</html>

<?php

include("connexion.php");


function sub()
{
	global $pdo;


	$sub = $pdo->prepare("SELECT user.firstname, user.lastname, subscription.name FROM membership JOIN user ON membership.id_user = user.id JOIN subscription ON subscription.id = membership.id_subscription WHERE user.lastname LIKE :user");



	$sub->bindValue(':user', '%' . $_POST['utiliser'] . '%');


	$sub->execute();

	$rls = $sub->fetchAll(PDO::FETCH_ASSOC);

	if (isset($_POST['utiliser'])) {
		foreach ($rls as $vls) {
			echo ($vls['firstname'] . '&nbsp;' . '&nbsp;' . $vls['lastname'] .  '&nbsp;' . '&nbsp;' .  '&nbsp;' . '&nbsp;' .$vls['name'] . '<br>');
		}
	}
}
sub();





?>