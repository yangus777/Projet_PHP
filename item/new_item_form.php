<?php require '../index/header.php'; ?>
<body>
<!-- Form Item Creation-->

	<form method="POST" action="new_item_created.php">
		<input type="text" name="name" placeholder="Cadbury" required>    Item Name </input> <br/> 
		<input type="text" name="price" placeholder="12.5" >   Item Price - - <b>USE A DOT TO ENTER THE PRICE</b></input> <br/><br/>
		<input type="file" name="picture" style="border:solid 1px black"> Item Picture</input> <br/>
         <p>
     

<?php

session_start();
// Database Connection
$base = mysql_connect('localhost', 'root', ''); 
// DB SELECT
mysql_select_db ('pdahan_db', $base) or die("bug");

//Display Select Window
echo '<label for="category">'.'Choose the Category'.'</label><select name="category">' ;
$query="SELECT id_category, name FROM category ORDER BY id_category";
$res=mysql_query($query);

//Method to get category name
while ($row=mysql_fetch_array($res, MYSQL_BOTH)){
	echo '<option value=' . $row["id_category"].'>'. $row["name"]. '</option>';
	}
echo'</select>';
?>
   </p>
        <input type="text" name="description" placeholder="Chocolate Bar 250 gr" required > </input> <br/>
        <input type="submit" name="send"></input>
    
	</form>
</body>
<?php require '../index/footer.php'; ?>;
