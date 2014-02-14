<html>
<header>
<title>User List</title>
</header>
<body>
<!-- Form Item Creation-->
	<p> ITEM LIST </P>
	<h3> Updating ITEM </h3>
	
	<?php
	session_start();
	// Database Connection
	$base = mysql_connect('localhost', 'root', ''); 
	// DB SELECT
	mysql_select_db ('pdahan_db', $base) or die("bug");

	//Display Select Window
	//echo '<label for="category">'.'Choose the item'.'</label><select name="item">' ;
	$query="SELECT * FROM user ORDER BY id_user";
	//LISTER LES PRODUITS VIA tableau htlml
	//
	$res=mysql_query($query);

	//Method to get category name
	echo '<table style="border : solid black 1px;"><thead><tr><th>ID User</th><th>Name</th><th>Street</th><th>City</th></tr></thead><tbody>';
		while ($row=mysql_fetch_array($res, MYSQL_BOTH)){		
			echo '<tr><td style="border : solid black 1px;">'.$row["id_user"].'</td>';
			echo '<td><a href="modify_item.php?id_user='.$row['id_user'].'">' .$row["name"].'</a></td>';
			echo '<td>' .$row["street"].'</a></td>';
			echo '<td>' .$row["city"].'</td></tr>';
		}
	
	echo '</tbody></table>';
	
	?>
	<!--<form method="POST" action="item_modified.php">
		<input type="text" name="name" placeholder="Cadbury"  required>    Item Name</input> <br/> 
		<input type="text" name="price" placeholder="12,5" >   Item Price</input> <br/><br/>
		<input type="file" name="picture" style="border:solid 1px black"> Item Picture</input> <br/>
         <p>
   </p>
        <input type="text" name="description" placeholder="Chocolate Bar 250 gr" required> </input> <br/>
        <input type="submit" name=""></input>
    
	</form>-->
</body>
</html>
