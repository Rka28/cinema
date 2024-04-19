<?php
include("connexion.php");


function afficher()
{



	global $pdo;

	$query = $pdo->prepare('SELECT movie.title, distributor.name, genre.name FROM movie JOIN movie_genre ON movie_genre.id_movie = movie.id JOIN genre ON
	movie_genre.id_genre = genre.id JOIN distributor ON movie.id_distributor = distributor.id WHERE distributor.name LIKE :distributor AND movie.title LIKE :title AND genre.name LIKE :genre');




	$query->bindValue(':title', '%' . $_POST['Film'] . '%');
	$query->bindValue(':distributor', '%' . $_POST['dist'] . '%');
	$query->bindValue(':genre', '%' . $_POST['genre'] . '%');


	$query->execute();

	$results = $query->fetchAll();



	if (isset($_POST['Film'])) {
		foreach ($results as $item) {
			echo ($item['title'] . '<br>');
		}
	}
	if (isset($_POST['dist'])) {
		foreach ($results as $item) {
			echo ($item['distributor'] . '<br>');
		}
	}
}
					
	

function option()
{
	global $pdo;

	$genre = 'SELECT * FROM genre;';
	$grn = $pdo->prepare($genre);
	$grn->execute();
	$resultgenre = $grn->fetchAll(PDO::FETCH_ASSOC);
	foreach ($resultgenre as $valvue) {
		echo '<option value="' . $valvue['name'] . '">' . $valvue['name'] . '</option>';
	}
}

function membre()
{
	global $pdo;


	$sub = $pdo->prepare('SELECT  user.firstname, user.lastname,user.city ,user.country FROM user WHERE user.lastname LIKE :user;');


	$sub->bindValue(':user', '%' . $_POST['menbre'] . '%');


	$sub->execute();


	$rls = $sub->fetchAll(PDO::FETCH_ASSOC);


	if (isset($_POST['menbre'])){
		foreach ($rls as $vls) {
			echo ($vls ['firstname'] . '&nbsp;' . $vls['lastname'] . '&nbsp;' . '&nbsp;' . $vls['city'] . '&nbsp;' . '&nbsp;' . '&nbsp;' . $vls['country'] . '<br>');
		}
	}

}

