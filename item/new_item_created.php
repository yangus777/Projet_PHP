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
$requete="INSERT INTO item(name,price,description,picture,ext_category) VALUES ('$name','$price','$description','$picture','$category')";
$result=mysql_query($requete);
echo ('New Item created');
?>
<a href="#">Back Home</a>
</body>
</html>