<?= require '../index/header.php'; ?>
<body>
<?php 
//Select * froùm customer  WHERE name ."GET[nom]"
//$row= mysql fetch array
//<from>
//UPDATE `pdahan_db`.`user` SET `name` = 'mikou',
// `firstname` = 'toto',
// `email` = 'plop@plop.com',
// `street` = 'ggg',
// `zipcode` = 'ghghf',
// `city` = 'fgh',
// `phonenumber` = 'fghfg',
// `cellphone` = 'fhg' WHERE `user`.`id_user` =4;
session_start();
// Database Connection
$base = mysql_connect('localhost', 'root', ''); 
// DB SELECT
mysql_select_db ('pdahan_db', $base) or die("bug");
?>
 <form method="POST" action="#">
		<input type="text" name="name"  placeholder="Pan" required>Name</input> <br/> 
		<input type="text" name="firstname" placeholder="Peter" required>First Name</input> <br/><br/>
		<input type="password" name="pass" required> Password - Minimum 10 Characters</input> <br/>(
		<input type="password" name="passconfirm" required>Confirme Password</input> <br/>
        <input type="email" name="email" placeholder="joe.biden@yahoo.com" required> </input> <br/>
		<input type="text" name="street" placeholder="6 Abbey Road" required> </input> <br/>
		<input type="text" name="zipcode" placeholder="77420" required> </input> <br/>
		<input type="text" name="city" placeholder="London" required> </input> <br/>
		<input type="text" name="phonenumber" placeholder="0123456789" > </input> <br/>
		<input type="text" name="cellphone" placeholder="0723456789" > </input> <br/>
        <input type="submit" name="send"></input>
<?php		
if(isset($_POST['name'])){
	$name=$_POST['name'];
} else{
echo'You did not enter a name';
}
if(isset($_POST['price'])){
	$price=$_POST['price'];
}else{
echo'You did not enter a price';
}
if(isset($_POST['description'])){
	$description=$_POST['description'];
}else{
echo'You did not enter a description';
}

if(isset($_POST['picture'])){
	$picture=$_POST['picture'];
}else{
echo'You did not join a picture';
}

if(isset($_POST['category'])){
	$category=$_POST['category'];
}else{
echo'You did not enter a category';
}
$requete="UPDATE `pdahan_db`.`user` SET `name` = 'mikou',
// `firstname` = $firstname,
// `email` = '$email',
// `street` = '$street',
// `zipcode` = '$zipcode',
// `city` = '$city',
// `phonenumber` = '$phonenumber',
// `cellphone` = '$cellphone' WHERE `user`.`id_user` =4;
$result=mysql_query($requete);
echo ('Item Modified');"
?>
<a href="#">Back Home</a>
</body>
</html>
<?= require '../index/footer.php'; ?>