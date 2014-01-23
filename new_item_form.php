<html>
<header>
<title>New Item Page</title>
</header>
<body>
<!-- Form Item Creation-->

	<form method="POST" action="new_item_created.php">
		<input type="text" name="name" value="name" placeholder="Cadbury" required>    Item Name</input> <br/> 
		<input type="text" name="price" value="price" placeholder="12,5" required>   Item Price</input> <br/><br/>
		<input type="file" name="picture" value="picture" style="border:solid 1px black"> Item Picture</input> <br/>
         <p>
       <label for="pays">Item Category</label><br />
       <select name="category">
           <option value="dark_chocolate">Dark Chocolate</option>
           <option value="milk_chocolate">Milk Chocolate</option>
           <option value="white_chocolate">White Chocolate</option>
       </select>
   </p>
        <input type="text" name="description" value="description" placeholder="Chocolate Bar 250 gr" required>   Description</input> <br/>
        <input type="submit" name="send"></input>
    
	</form>
</body>
</html>
