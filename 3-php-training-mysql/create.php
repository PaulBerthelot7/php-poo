<?php
  include "inc/DBConnection.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un jeu de société</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
	
	 if('POST' == $_SERVER['REQUEST_METHOD']) {
		 
		 try{
			 $name = $_POST['name'];
			 $player_min = $_POST['player_min'];
			 $player_max = $_POST['player_max'];
			 $age_min = $_POST['age_min'];
			 $age_max = $_POST['age_max'];
			 $picture = $_POST['picture'];
			 
			 $sql = "INSERT INTO boardgames(name,player_min,player_max,age_min,age_max,picture)
					 VALUES('$name','$player_min','$player_max','$age_min','$age_max','$picture')";
			 $bdd = DBConnection::getInstance()->getConnection();
			 $bdd->prepare($sql);
			 $bdd->execute(array(':name' => $name,':player_min' => $player_min,':player_max' => $player_max,':age_min' => $age_min,':age_max' => $age_max,':picture' => $picture));
			 echo 'Entrée ajoutée dans la table';
		 }
		 
		 catch(PDOException $e){
			 echo "Erreur : " . $e->getMessage();
		   }
	 }
 ?>



	
	<a href="./read.php">Liste des jeux</a>
	<h1>Ajouter un jeu de société</h1>
	<form action="#" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<label for="min_age">Min Age</label>
			<input type="number" name="min_age" value="">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" name="max_age" value="">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" name="min_players" value="">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" name="max_players" value="">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="">
		</div>

		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
