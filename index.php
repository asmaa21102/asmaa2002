<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="CSS/main.css">
    <script> 
    function handleLogin() {
         var username = document.getElementById('username').value; 
         var password = document.getElementById('password').value;
           if (username && password) {
             window.location.href = 'CSS/RES.PHP';
               } else { 
                alert('Please enter both username and password.'); 
                } 
                } 
    </script>

</head>
<body>
    <div class="main">
    <h1>log in</h1>
    <i>lets enjoy</i><br>
    <br>
    <input type="text" name="username" id="username" placeholder="Username"> <br>
     <input type="password" name="password" id="password" placeholder="Password"> <br> 
     <input type="button" name="submit" id="submit" value="Log In" onclick="handleLogin()">
<h3>or</h3><br>
<a id="dd"href="register.php">REGISTER </a>

</div>
</body>
</html>