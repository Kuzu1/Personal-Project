<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="login.js" defer></script>
</head>
<body>


        <div class="container" id="signup" style="display:none">
            <div class="form-title">
                <h1>Register</h1>
                <form method="post" action ="register.php">
                    <div class="input-group">
                        <i class="ri-user-5-fill"></i>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                        <label for="Username">Username</label>
                    </div>
                    <div class="input-group">
                        <i class="ri-mail-line"></i>
                        <input type="email" name="email" id="email" placeholder="Emal" required>
                        <label for="password">Email</label>

                    </div>
                    <div class="input-group">
                        <i class="ri-lock-2-line"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>

                    </div>
                    <div class="input-group">
                        <i class="ri-lock-2-line"></i>
                        <input type="password2" name="password2" id="password2" placeholder="Confirmed Password" required>
                        <label for="password2">Confirmed Password</label>

                    </div>
                   
                        <input type="submit" class="btn" value="Signup" name="signup">
                    
                </form>
                <div class="icons">
                 <i class="fab fa-google"></i>
                 <i class="ri-facebook-fill"></i>
                 <i class="ri-github-fill"></i>
                 
                </div>
                <div class="links">
                    <p>Already have an account? <a href="login.html"></a></p>
                    <button id="signinbutton">Sign In</button>

                </div>
            </div>
        </div>





        <div class="container" id="signin">
            <div class="form-title">
                <h1>Sign In</h1>
                <form method="post" action ="login.php">
                    <div class="input-group">
                        <i class="ri-user-5-fill"></i>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                        <label for="Username">Username</label>
                    </div>
                    <div class="input-group">
                        <i class="ri-mail-line"></i>
                        <input type="email" name="email" id="email" placeholder="Emal" required>
                        <label for="password">Email</label>

                    </div>
                    <div class="input-group">
                        <i class="ri-lock-2-line"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>

                    </div>
                    <p class="recoverpw">
                        <a href="#">Forgot Password?</a>
                    </p>
                   
                        <input type="submit" class="btn" value="Sign In" name="signin">
                    
                </form>
                <div class="icons">
                 <i class="fab fa-google"></i>
                 <i class="ri-facebook-fill"></i>
                 <i class="ri-github-fill"></i>
                 
                </div>
                <div class="links">
                    <p>Don't have an account? <a href="login.html"></a></p>
                    <button id="signupbutton">Sign Up</button>

                </div>
            </div>
        </div>
        
</body>
</html>

