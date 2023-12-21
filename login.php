<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <title>FOODIE FIX</title>
</head>
<body>

    <!-- header section start -->

    <header>
        <a href="index.php" class="logo"><img src="logo.jpg"></a>

        <nav class="navbar">
            
        </nav>
    </header>
    <!-- header section en -->
    <section>
        
        <div class="form-box">
            <div class="form-value">
                <form action="add3.php" method="POST">
                    <h2>login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" name="email" type="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" name="password" type="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <br><u><a href="#">Forget Password</a></u></label>
                        
                    </div>
                    <button id="submit" name="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account <br> <u><a href="register.php">Register</a></u></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>