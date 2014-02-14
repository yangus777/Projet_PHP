<html>
<header>
<title>New Item Page</title>
</header>
<body>
<!-- Form Item Creation-->

	<form method="POST" action="new_user_created.php">
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
    
	</form>
</body>
</html>
