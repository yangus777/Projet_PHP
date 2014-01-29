<html>
<head>
<title>New Item Created</title>
</head>
<body>
<?php 

session_start();
// Database Connection
$base = mysql_connect('localhost', 'root', ''); 
// DB SELECT
mysql_select_db ('pdahan_db', $base) or die("bug"); 
//Pass lentgh test
if(isset($_POST['pass'])){
	$pass=$_POST['pass'];
	if (strlen($pass) < 10) {
		echo 'Your password is too short';
	}
	} else{
		echo'You did not enter a password';
}
if(isset($_POST['pass'])){
	$passconfirm=$_POST['passconfirm'];
}
//Pass Test
if($pass == $passconfirm){
	echo '<br/>' . 'OK';
	$passone = crypt($pass);
	$passtwo = crypt($passconfirm);
	} else {
	echo 'The passwords are different';
	}

// Crypt Function for password



$requete="INSERT INTO user(pass, passconfirm) VALUES ('$passone','$passtwo')";
$result=mysql_query($requete);
?>
<br/>
<a href="#">Back Home</a>
</body>
</html>