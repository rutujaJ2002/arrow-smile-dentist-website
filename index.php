<?php

include "./conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist website</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom style file link-->
    <link rel="stylesheet" href="./style.css">

    <!--bootstrap cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header fixed-top" id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                    <a href="#home" class="logo">arrow<span>Smile</span></a>

                    <nav class="nav">
                        <a href="#home">home</a>
                        <a href="#about">about</a>
                        <a href="#services">services</a>
                        <a href="#reviews">reviews</a>
                        <a href="#contact">contact</a>
                    </nav>

                    <a href="#contact" class="link-btn">Make appointment</a>

                    <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <!--home section starts-->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>we care for your smile</h3>
                    <p>Our group of dentists is dedicated to providing the very best care for to you, like you. Get complete dental care and a relaxed, comfortable dental experience like no other.</p>
                    <a href="#contact" class="link-btn">Make appointment</a>
                </div>
            </div>
        </div>
    </section>

    <!--qabout section starts-->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="./images/about-img.jpg" alt="" class="w-100 mb-4 mb-md-0">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>everything your smile need</h3>
                    <p>We have all the services you need for a healthy, confident smile, and a patient experience that’s second to none. Our caring, experienced dentists are proud to be recognized by the communities we live in and serve!</p>
                    <ul>
                        <li>routine oral hygoene & prevention</li>
                        <li>dental implants</li>
                        <li>dental x-rays</li>
                        <li>periodical therapy</li>
                        <li>tooth-colored fillings</li>
                        <li>crowns & bridges</li>
                        <li>root canal therapy</li>
                        <li>veneers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--services section stars-->
    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/icon-1.svg" alt="">
                <h3>alignment specialists</h3>
                <p>State-of-the-art technology for precision & comfort</p>
            </div>

            <div class="box">
                <img src="./images/icon-2.svg" alt="">
                <h3>cosmetic dentistry</h3>
                <p>Complete, quality dentistry focused on prevention</p>
            </div>

            <div class="box">
                <img src="./images/icon-3.svg" alt="">
                <h3>oral hygeine experts</h3>
                <p>complete dental care and a relaxed, comfortable dental experience like no other.</p>
            </div>

            <div class="box">
                <img src="./images/icon-4.svg" alt="">
                <h3>root canal specialist</h3>
                <p>Recognized as top dentists by patients & peers</p>
            </div>

            <div class="box">
                <img src="./images/icon-5.svg" alt="">
                <h3>live dental advisory</h3>
                <p>caring, experienced dentists are proud to be recognized by the communities we live in and serve!</p>
            </div>

            <div class="box">
                <img src="./images/icon-6.svg" alt="">
                <h3>cavity inspection</h3>
                <p>tale our leave with a great smile, cause we care for your smile</p>
            </div>
        </div>
    </section>

    <!--process section starts-->
    <section class="process" id="process">
        <h1 class="heading">
            treatment process
        </h1>

        <div class="box-container container">
            <div class="box">
                <img src="./images/process-1.png" alt="">
                <h3>cosmetic dentistry</h3>
                <p>a method of professional oral care that focuses on improving the appearance of your teeth.</p>
            </div>

            <div class="box">
                <img src="./images/process-2.png" alt="">
                <h3>pediatric dentistry</h3>
                <p>we focuses on caring for children from infancy through the teenage years, for thier tooth care </p>
            </div>

            <div class="box">
                <img src="./images/process-3.png" alt="">
                <h3>dental dentistry</h3>
                <p>dental and oral medicine conditions, procedures, and surgery. Peer reviewed and up-to-date recommendations</p>
            </div>
        </div>
    </section>

    <!--reviews section starts-->
    <section class="reviews" id="reviews">
        <h1 class="heading">Our satisfied clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="./images/pic-1.png" alt="">
                <p>Great Dentist with personalized service. I always go to Dr.Potter even though my primary dentist is in Long Beach. really Come check out this place.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>jubin draco</h3>
                <span>satistfied client</span>
            </div>

            <div class="box">
                <img src="./images/pic-2.png" alt="">
                <p>I am a new patient and had one of the most pleasant experiences I have ever had at a dentist.during the entire procedure, my comfort was the highest priority.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>hermione weasley</h3>
                <span>satistfied client</span>
            </div>

            <div class="box">
                <img src="./images/pic-3.png" alt="">
                <p>Came in to get my cavity filled and I was given the best service.  treatment process was nice convenience. The staff is excellent and super friendly.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>darshan patil</h3>
                <span>satistfied client</span>
            </div>
        </div>
    </section>

    <!--conatct section starts-->
    <section class="contact" id="contact">
        <h1 class="heading">our appointment</h1>

        <form action="./appointment.php" method="POST">
            <span>your name:</span>
            <input type="text" name="name" placeholder="Enter your name" class="box">

            <span>your meail:</span>
            <input type="email" name="email" placeholder="Enter your email" class="box">

            <span>your number:</span>
            <input type="number" name="phone" placeholder="Enter your mobile number" class="box">

            <span>appointment date:</span>
            <input type="datetime-local" name="date" class="box">

            <input type="submit" value="make appointment" name="appointment" class="link-btn">
        </form>
    </section>

    <!--footer section starst-->
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+123-456-7890</p>      
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>powai naka, satara-415501</p>      
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>potterhead@example.com</p>      
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>07:00am-10:00pm</p>      
            </div>
        </div>

        <p class="credit">&copy; copyright @ | <!--<?php echo date('Y');?>--> 
            <span>Rutuja Jadhav </span>
        </p>
    </section>

    <script src="./index.js"></script>
    
</body>
</html>