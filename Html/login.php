
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p> Don't have account?<br>click to create</p>
                    <a href="sign.php" class="btn">Sign Up</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="loginprocess.php" method="POST">
                        <p>
                            <label><i class="fas fa-user"></i>Email address<span>*</span></label>
                            <input type="email" name="email" placeholder="Username or Email" required>
                        </p>
                        <p>
                            <label><i class="fas fa-lock"></i> Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Password" required>
                        </p>
                        <p>
                            <input type="submit" value="Sign In">
                        </p>
                        <p>
                            <a href="#"><i class="fas fa-key"></i> Forgot password?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>       
</body>
</html>
