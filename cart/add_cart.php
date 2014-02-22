
<?php
/* Démarrage ou prolongation de la session */
session_start();
$base = mysql_connect('localhost', 'root', ''); 
// DB SELECT
mysql_select_db ('pdahan_db', $base) or die("bug");

$query="SELECT * FROM item WHERE id_item = " . mysql_real_escape_string($_GET['add']);
$res=mysql_query($query);
$row=mysql_fetch_array($res);

/* On vérifie l'existence du panier, sinon, on le crée */
if(!isset($_SESSION['cart']))
{
    /* Initialisation du panier */
    $_SESSION['cart'] = array();
}

if (isset($_SESSION['cart'][$row['id_item']])) {
	$_SESSION['cart'][$row['id_item']]++;
}
else {
	$_SESSION['cart'][$row['id_item']] = 1;
}

header('Location: ../item/item_list.php');
exit;
?>