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
//POST method to write DB
if(isset($_POST['name'])){
	$name=$_POST['name'];
}
if(isset($_POST['firstname'])){
	$firstname=$_POST['firstname'];
}

if(isset($_POST['pass'])){
	$pass=$_POST['pass'];
	//Pass lentgh test
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
	// Crypt Function for password, basic security
	$passone = crypt($pass);
	$passtwo = crypt($passconfirm);
	} else {
	echo 'The passwords are different';
}

if(isset($_POST['email'])){
	$firstname=$_POST['email'];
}
if(isset($_POST['street'])){
	$firstname=$_POST['street'];
}
if(isset($_POST['zipcode'])){
	$firstname=$_POST['city'];
}
if(isset($_POST['phonenumber'])){
	$firstname=$_POST['phonenumber'];
}


$requete="INSERT INTO user(name, firstname,pass, passconfirm) VALUES ('$name','firstname','$passone','$passtwo')";
$result=mysql_query($requete);
?>
<br/>
<a href="#">Back Home</a>
</body>
</html>