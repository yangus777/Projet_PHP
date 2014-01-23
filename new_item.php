<?php 

	session_start();

	// On se connecte à la base
    $base = mysql_connect('localhost', 'root', ''); 

    // C'est tes parametres de connexion à la base sur WAMP
    mysql_select_db ('pdahan_db', $base) or die("bug"); 

	if(isset($_GET['name'])){
		$name=$_GET['name'];
	}
	if(isset($_GET['price'])){
		$price=$_GET['price'];
	}

	if(isset($_GET['description'])){
		$description=$_GET['description'];
	}


	if(isset($_GET['picture'])){
		$picture=$_GET['picture'];
	}
$requete="INSERT INTO item(name,price,description,picture) VALUES ($name,$price,$description,$picture)";
$result=mysql_query($requete) or die('A wild problem happen');
echo ('New Item created');


?>