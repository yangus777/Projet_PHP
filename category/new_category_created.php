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
$requete="INSERT INTO category(name) VALUES ('$name')";
$result=mysql_query($requete);
echo ('New Item created');
?>
<p><a href="#" alt="back home">Back Home</a></p>
</body>
</html>