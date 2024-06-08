<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REEGISTER</title>
	<link rel="stylesheet" href="CSS/main.css">
</head>
<body>
	<div class="main">
	<h1>Register</h1>
	<br>
	<i>HELLO </i><br>
	<br>

	<form action="register_post.php" method="POST">
        
	
        <label for="a<label for="b">username  </label>
        <input  id="b" name="username"type="text">
        <br>
		<label for="h">Email</label>
        <input  id="h"name="email"type="email">
        <br>
		<label for="s">password</label>
        <input id="as" name="password" type="password"><br>
		<label for="c">birthday</label>
<input id="c" name="birthday_month" type="month"><br>
<label for="al">gender</label>
   <input id="al"list="pr" name="gender">

<datalist id="pr">
    <option value=" male">male</option>
        <option value=" female">female</option>
            


   </datalist><br>

        

        <input type="submit" name="submit" id="submit" value="register">
	</form>

		<h3>or</h3><br>
		<a id="d"href="index.php">log in </a>

       
	   </div>
</body>
</html>