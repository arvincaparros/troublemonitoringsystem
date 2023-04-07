<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>

    
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>

        <div class="signup">
            <a class="btn btn-success" href="#">Sign Up</a>
        </div>
    </header>

    <main>

        
            <div class="login">
                <div class="icon">
                    <img src="images/user.png" alt="IMAGE">
                </div>

                <div class="heading">
                    <h3>Sign in to your account.</h3>
                </div>
                
                

                <form method="POST" action="">
                    <div class="mb-3">
                      <input type="text"
                        class="form-control" name="username" id="" placeholder="Please type your username">
                    </div>

                    <div class="mb-3">
                      <input type="password"
                        class="form-control" name="password" id="" placeholder="Please type your password">
                    </div>
                    <button type="submit" class="form-control btn btn-primary" name="signin">Sign in</button>
                </form>

                <div class="forgotpassword">
                    <p>Forgot <span><a href="#">Password?</a></span></p>
                </div>
            </div>
        

    </main>
    
    
    <footer>
        <p>
            All right reserved &copy; 2023 | Developed by:  <span><a href="#">AMC</a></span>
        </p>
    </footer>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>