<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="register.css">
    <title>FOODIE FIX</title>
</head>
<body>

    <!-- header section start -->

    <header>
        <a href="index.php" class="logo"><img src="logo.jpg"></a>

        <nav class="navbar">
            <a href="index.php" class="active">home</a>
            <a href="login.php" class="active">login</a>
        </nav>
    </header>
    <!-- header section end -->
    <section>
        <form action="add.php" method="Post">
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input id="name" name="full_name" type="text" required>
                        <label for="name">Full Name</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input id="number" name="phone_number" type="number" required>
                        <label for="number">Phone Number</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="home-outline"></ion-icon>
                        <input id="address" name="address" type="text" required>
                        <label for="address">Address</label>
                    </div>
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
                    
                    <button>Register</button>
                    
                </form>
            </div>
        </div>
        </form>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>