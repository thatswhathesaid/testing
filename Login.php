<html>
<head>
    <title> Welcom To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
    

</head>
<body>
    <div style="background-image: url('login.jpg');"></div>
    <div id="frm">
        <form action = "login_code.php" method = "post">
            <p>
                <label>Username</label>
                <input type = "text" id = "username" name = "username" required=""/>
            </p>
            <p>
                <label>Password</label>
                <input type = "text" id = "pwd" name = "password" required=""/>
            </p>
          
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
  
        <form action = "registration.php" method = "post">
       
            <a>
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </a>
        </form> 
        
    </div>
</body>
</html>
    