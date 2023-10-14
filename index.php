<!DOCTYPE html>
<head>
<title>Login</title>
<link rel="icon" tpye="image/x-icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
</head>
<body>
<div id="container">
<div id="login-container">
<div class="login-filler">
</div>
<div class="login-box">
    <h1>Welcome!</h1>
    <h3>Please Login</h3>
    <form action="login-system/login.php" method="post">

        <div class="Login-Container">
            <label for="uname"><b>Username</b></label>
            <input type="text" maxlength="25" placeholder="Enter Username" name="uname" >
            <?php
                if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <label for="psw"><b>Password</b></label>
            <input type="password" maxlength="35" placeholder="Enter Password" name="psw" >
                    
            <button type="submit">Login</button>
        </div>

        <div class="Login-container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

</div>

</div>
</body>

</html>