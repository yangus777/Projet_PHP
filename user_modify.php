<html>
<head>
<title>Modify an Item</title>
</head>
<body>
<?php 
session_start();
// Database Connection
$base = mysql_connect('localhost', 'root', ''); 
// DB SELECT
mysql_select_db ('pdahan_db', $base) or die("bug");
$req2 = "Select * FROM user  WHERE id = '". $_POST['user_id']. " ' ";
echo $req2;
$req3=mysql_query($req2);
$row= mysql_fetch_array($req3, 1);	
			
			
?>
 <form method="POST" action="#">
		<input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Pan" required>Name</input> <br/> 
		<input type="text" name="firstname" value="<?php echo $row['firstname'] ?> "placeholder="Peter" required>First Name</input> <br/><br/>
		<input type="password" name="pass" value="<?php echo $row['pass'] ?>" required> Password - Minimum 10 Characters</input> <br/>(
		<input type="password" name="passconfirm" value="<?php echo $row['pascconfirm'] ?>"  required>Confirme Password</input> <br/>
        <input type="email" name="email"value="<?php echo $row['email'] ?>" placeholder="joe.biden@yahoo.com" required> </input> <br/>
		<input type="text" name="street" value="<?php echo $row['street'] ?>" placeholder="6 Abbey Road" required> </input> <br/>
		<input type="text" name="zipcode" value="<?php echo $row['zipcode'] ?>" placeholder="77420" required> </input> <br/>
		<input type="text" name="city" value="<?php echo $row['city'] ?>" placeholder="London" required> </input> <br/>
		<input type="text" name="phonenumber" value="<?php echo $row['phonenumber'] ?>" placeholder="01.23.45.67.89" > </input> <br/>
		<input type="text" name="cellphone" value="<?php echo $row['cellphone'] ?>" placeholder="07.23.45.67.89" >You can use "-" or "." to separate numbers </input> <br/>
        

<?php		
// if(isset($_POST['name'])){
	// $name=$_POST['name'];
// } else{
// echo'You did not enter a name';
// }
// if(isset($_POST['price'])){
	// $price=$_POST['price'];
// }else{
// echo'You did not enter a price';
// }
// if(isset($_POST['description'])){
	// $description=$_POST['description'];
// }else{
// echo'You did not enter a description';
// }
// if(isset($_POST['picture'])){
	// $picture=$_POST['picture'];
// }else{
// echo'You did not join a picture';
// }
// if(isset($_POST['category'])){
	// $category=$_POST['category'];
// }else{
// echo'You did not enter a category';
// };

$requete="UPDATE user SET name = '".$row['name']."', firstname = '".$row['firstname']."', email = '".$row['email']."', street = '".$row['street']."', zipcode = '".$row['zipcode']."', city = '".$row['city']."', phonenumber = '".$row['phonenumber']."', cellphone = '".$row['cellphone']."' WHERE user.id_user = '".$row['id_user']."' ;";
echo $requete;

$req5 = mysql_query($requete);
echo '<input type="submit" name="send"></input>';
?>


</form>
<a href="#">Back Home</a>
</body>
</html>