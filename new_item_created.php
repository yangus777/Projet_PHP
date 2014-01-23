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
}
if(isset($_POST['price'])){
	$price=$_POST['price'];
}
if(isset($_POST['description'])){
	$description=$_POST['description'];
}

if(isset($_POST['picture'])){
	$picture=$_POST['picture'];
}
$requete="INSERT INTO item(name,price,description,picture) VALUES ('$name','$price','$description','$picture')";
$result=mysql_query($requete);
echo ('New Item created');
?>
<a href="#">Back Home</a>
</body>
</html>