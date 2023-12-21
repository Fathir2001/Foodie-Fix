<?php include("./config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head> 
<body>
    <!-- header section part-->
    <header>
        <a href="#" class="logo"><img src="logo.jpg"></a>

        <nav class="navbar">
            <a href="login.php">Login</a>
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#menu_card">menu</a>
            <a href="#team">team</a>
            <a href="#reservation">reservation</a>
            <a href="#blog">blog</a>
            
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-heart"></i>
            
            <div class="shopping">
                <i class="fas fa-shopping-cart"></i>
                <span class="quantity">0</span>
            </div>

        </div>
    </header>
    <!-- header section end -->

    <!-- slider section start-->
    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide slide1">
                    <div class="content">
                        <img src="crown-symbol.png">

                        <h3>delicious royate</h3>
                        <h1>gift voucher</h1>
                        <p>
                            give away your beloved customers
                        </p>
                        <a href="#menu_card" class="btn">order now</a>
                    </div>
                </div>

                <div class="swiper-slide slide slide2">
                    <div class="content">
                        <img src="crown-symbol.png">

                        <h3>sale of 10% this dish</h3>
                        <h1>the fresh</h1>
                        <p>
                            food restaurant
                        </p>
                        <a href="#menu_card" class="btn">order now</a>
                    </div>
                </div>

                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="crown-symbol.png">

                        <h3>we are open</h3>
                        <h1>fresh fruits</h1>
                        <p>
                            you will love it
                        </p>
                        <a href="#menu_card" class="btn">order now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider section start-->

    <section class="welcome" id="about">
        <h1 class="heading">WELCOME TO FOODIE FIX</h1>
        <center><h3 class="sub-heading"> ~ Luxury & Quality ~ </h3></center>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="post-thumb-1.jpg">
                </div>

                <div class="content">
                    <h3>PROFESSIONAL LEVEL</h3>
                    <P>nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</P>

                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="post-thumb-2.jpg">
                </div>

                <div class="content">
                    <h3>FRESH FOOD GUARANTEED</h3>
                    <P>nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</P>

                    <a href="#" class="btn">Read More</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="post-thumb-3.jpg">
                </div>

                <div class="content">
                    <h3>THE MENU IS PLENTIFUL</h3>
                    <P>nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</P>

                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- welcome section start-->

    <!-- our menu section start-->
    <section class="our-menu" id="menu_card">
        <h1 class="heading">our food menu</h1>
        <center><h3 class="sub-heading"> ~ see what we offer ~ </h3></center>

        <div class="container">
        

        <div class="list">
          
        </div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>

    <script src="app.js"></script>
        
        
    </section>
    <!-- our menu section end-->


    <!-- our team section start -->
    <section class="our-team" id="team">
        <h1 class="heading">our talented chef</h1>
        <center>
            <h3 class="sub-heading"> ~ Experience & Enthusiasm ~ </h3>
        </center>

        <div class="our-chef">
            <div class="item">
                <div class="image">
                    <img src="our-chef-1.jpg">
                </div>

                <div class="chef-info">
                    <div>
                        <h3>Jerry Robertson</h3>
                        <span>master chef</span>

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="our-chef-2.jpg">
                </div>

                <div class="chef-info">
                    <div>
                        <h3>Corol Rowson</h3>
                        <span>master chef</span>

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="our-chef-3.jpg">
                </div>

                <div class="chef-info">
                    <div>
                        <h3>Tayler Maccoy</h3>
                        <span>master chef</span>

                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- our team section ends -->



    <!--reservation section start -->
        <div class="reservation" id="reservation">
            <div class="image">

            </div>

            <div class="form">
                <h1 class="heading">book a table</h1>
                <center><h3 class="sub-heading"> ~ check out our place ~ </h3></center>

                <form action="add2.php" method="Post">
                    <div class="form-holder">
                        <div>
                            <select name="people" id="people">
                                <option value="1">1 people</option>
                                <option value="2">2 people</option>
                                <option value="3">3 people</option>
                                <option value="4">4 people</option>
                            </select>

                            <input type="text" name="time" placeholder="Time">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>

                        <div>
                            <input type="text" name="date" placeholder="Date">
                            <input type="text" name="name" placeholder="Name">
                            <input type="email" name="email" placeholder="email">
                        </div>
                    </div>
                    <center><button style="background: transparent;" id="submit" name="submit"><a class="btn">Book now</a></button></center>
                </form>
            </div>
        </div>
    <!--reservation section ends -->

    <!-- news section start -->
    <section class="blog welcome" id="blog">
        <h1 class="heading">latest news</h1>
        <center><h3 class="sub-heading"> ~ Greate Articles ~ </h3></center>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="post-thumb-4.jpg">
                </div>

                <div class="content">
                    <h3>PROFESSIONAL LEVEL</h3>
                    <p>nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
                    <a href="#">READ MORE</a>
                    <img src="post-body-bg-1.png" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="post-thumb-5.jpg">
                </div>

                <div class="content">
                    <h3>FRESH FOOD GUARANTEED</h3>
                    <p>nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
                    <a href="#">READ MORE</a>
                    <img src="post-body-bg-2.png" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="post-thumb-6.jpg">
                </div>

                <div class="content">
                    <h3>THE MENU IS PLENTIFUL</h3>
                    <p>nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur.</p>
                    <a href="#">READ MORE</a>
                    <img src="post-body-bg-3.png" alt="">
                </div>
            </div>

        </div>
    </section>
    <!-- news section end -->


    <!-- footer section start -->
    <section class="footer">
        <img src="logo.jpg" class="logo" style="height: 68px; width: 77px;">

        <div class="container">
            <div>
                <h3>ABOUT US</h3>
                <p>Foodie Fix: Where taste meets excellence! We take pride in serving delectable dishes made with passion and premium ingredients. Explore our menu crafted to delight your senses. Join us in savoring every flavor at Foodie Fix!</p>
            </div>

            <div>
                <h3>GET NEWS & OFFERS</h3>
                <input type="email" name="" placeholder="enter your email">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>

            <div>
                <h3>CONTACT US</h3>
                <span>FOODIE FIX</span>
                <span>+ (94) 778353336</span>
                <span>foodiefix2001@gmail.com</span>
                <span>www.foodiefix.com</span>
            </div>
        </div>

        <p>&copy;2023 Reserved by Fathir</p>
    </section>
    <!-- footer section end -->

    <!-- jump to top -->

    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>

    <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".home-slider", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
    });
  </script>
   <script type="text/javascript">
        let menu = document.querySelector('#menu');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
        }
    </script>
</body>






</html>