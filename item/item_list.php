
<?php include'../index/header.php'; ?>
<body>
<!-- Form Item Creation-->
	<h3>Panier: <?php echo array_sum($_SESSION['cart']) ?> produits
	<p> ITEM LIST </P>
	<h3> Updating ITEM </h3>
	
	<?php
		// Database Connection
	$base = mysql_connect('localhost', 'root', ''); 
	// DB SELECT
	mysql_select_db ('pdahan_db', $base) or die("bug");

	//Display Select Window
	//echo '<label for="category">'.'Choose the item'.'</label><select name="item">' ;
	$query="SELECT * FROM item ORDER BY id_item";
	//LISTER LES PRODUITS VIA tableau htlml
	//
	$res=mysql_query($query);
	//Method to get category name
	echo '<table style="border : solid black 1px;"><thead><tr><th>ID Item</th><th>Name</th><th>Price</th><th>Description</th><th>Cart</th></tr></thead><tbody>';
		while ($row=mysql_fetch_array($res, MYSQL_BOTH)){		
			echo '<tr><td style="border : solid black 1px;">'.$row["id_item"].'</td>';
			echo '<td><a href="modify_item.php?id_item='.$row['id_item'].'">' .$row["name"].'</a></td>';
			echo '<td>' .$row["price"].'€'.'</a></td>';
			echo '<td>' .$row["description"].'</td>';
			echo '<td><a href="../cart/add_cart.php?add='.$row["id_item"].'">Add</a><td>';

		}
	
	echo '</tbody></table>';
                          //démarrage de la session  
	?>

<?php include '../index/footer.php'; ?>
</body>