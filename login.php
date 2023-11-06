<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Main Page -->
<section class="banner">
    <div class="banner-overlay">
        <header class="header">
            <div class="container">
                <div class="left">
                    LOGO
                </div>
                <div class="middle">
                    <ul>
                        <a href="/"><li>Home</li></a>
                        <a href="/"><li>Models</li></a>
                        <a href="/"><li>Register As a Model</li></a>
                        <a href="/"><li>Hire As a Model</li></a>
                        <a href="/"><li>Services</li></a>
                        <a href="/"><li>About us</li></a>
                        <a href="/"><li>Contact us</li></a>
                    </ul>
                </div>
                <div class="right">
                
                    <a href="login.php">
                        <button class="btn" id="button1"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
                    </a>
                    <a href="./logout.php">
                        <button class="btn" id="button2"><i class="fa-solid fa-pen-to-square"></i> logout</button>
                    </a>

                </div>
            </div>
        </header>
    </div>
</section>

<!-- Popular Models -->
<section class="PopularModels">
    <div class="Heading">
        <h1 class="text">Popular Models</h1>
    </div>
    <div class="underline">----------*----------</div>
    <div class="SecondContainer">
        <div class="item" >
            <img class="img" src="./Image/m1.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m2.jpeg" alt="">
            <h3 class="FirstText">PETER</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m3.jpeg" alt="">
            <h3 class="FirstText">BEATRIZ</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m4.jpeg" alt="">
            <h3 class="FirstText">ALEXIS RANE</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m5.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m6.jpeg" alt="">
            <h3 class="FirstText">LAURI</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m7.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m8.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m9.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m10.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m11.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m12.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m13.jpeg" alt="">
            <h3 class="FirstText">ERICA</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m14.jpeg" alt="">
            <h3 class="FirstText">PAMELA STONEM</h3>
        </div>
        <div class="item" >
            <img class="img" src="./Image/m15.jpeg" alt="">
            <h3 class="FirstText">BARBARA SERNEY</h3>
        </div>
        
    </div>
    
</section>

<!-- Become a model -->
<section class="RegisterModel">
    <div class="Register">
        <h1 class="Model">BECOME A MODEL</h1>
        <button class="btn1">APPLY NOW</button>
    </div>
</section>

<!-- Model categories -->
<section class="HireModel">
    <div class="Heading">
        <h1 class="text">Model Categories</h1>
    </div>
    <div class="underline">----------*----------</div>
    <div class="Container4">
      <div class="Con1">
        <div class="boxModel" id="boxModel1">
            <h3 class="SmallHead">FEMALE MODELS</h3>
            <button class="Sbtn">EXPLORE PROFILE</button>
            <div>
                <img class="Simg" src="./Image/femalemodel.jpg" height="300px" width="250px" >
            </div>
        </div>
        <div class="boxModel" id="boxModel2">
            <h3 class="SmallHead">MALE MODELS</h3>
            <button class="Sbtn">EXPLORE PROFILE</button>
            <div>
                <img class="Simg" src="./Image/malemodel.jpeg" height="300px" width="250px">
            </div>
        </div>
      </div>
      <div class="Con2">
        <div class="boxModel" id="boxModel3">
            <h3 class="SmallHead">CELEBRITIES</h3>
            <button class="Sbtn">EXPLORE PROFILE</button>
            <div>
                <img class="Simg" src="./Image/celebrities.jpeg" height="300px" width="250px">
            </div>
        </div>
        <div class="boxModel" id="boxModel4">
            <h3 class="SmallHead">KIDS MODELS</h3>
            <button class="Sbtn">EXPLORE PROFILE</button>
            <div>
                <img class="Simg" src="./Image/kidsmodels.jpeg" height="300px" width="250px">
            </div>
        </div>

      </div>
    </div>
</section>

<!-- Services -->
<section class="Services">
    <div class="Heading">
        <h1 class="text">Our Services</h1>
    </div>
    <div class="underline">----------*----------</div>
    
    <div class="Container5">
        <div class="box" id="box1"><i class="fa-solid fa-film"></i> PROMOTIONAL MODELS</div>
        <div class="box" id="box2"><i class="fa-solid fa-money-bill"></i> BRAND AMBASSADORS</div>
        <div class="box"><i class="fa-solid fa-desktop"></i> EVENT MANAGEMENT</div>
        <div class="box"><i class="fa-solid fa-video"></i> STUDIO RENTALS</div>
        <div class="box"><i class="fa-solid fa-camera-retro"></i> PHOTOGRAPHY MODELS</div>
        <div class="box"><i class="fa-solid fa-atom"></i> RUNWAY MODELS</div>
        <div class="box" id="box7"><i class="fa-solid fa-tv"></i> TELEVISION MODELS</div>
        <div class="box" id="box8"><i class="fa-solid fa-ranking-star"></i> MARKETING</div>
    </div>
</section>

<!-- About us -->
<section class="Section6">
    <div class="Heading">
        <h1 class="text">About Us</h1>
    </div>
    <div class="underline">----------*----------</div>
    <div class="AboutUs">
        <div class="About">The point of this article is to help you grasp the big picture of getting six
            pack abs. In short, to get six pack abs, you need to get leaner and develop your abs,
            musculature. This is done through training and nutrition. The topic of nutrition is 
            covered extensively elsewhere on the net: I won't delve in it. Training-wise, to build 
            six pack abs, you must combine cardio exercise, weightlifting, and abdominal exercises.
            All three are important, and to really get results you must do all three.
            <br>
            <br>
            Cardio makes you leaner,which is necessary if you want your abs to show. weightlifting
            makes you leaner,too, by increasing your resting metabolic rate and the amount of 
            calories you burn at rest. Good weightlifting routines for fat loss are also available 
            elsewhere online. Finally abdomonal exercises are needed to define your abs and give 
            them the six pack look. 
        </div>
    
        <div class="AboutMore">
            <div class="div" id="div1"><i class="fa-solid fa-graduation-cap"></i> Over 20 yesr experience</div>
            <div class="div" id="div2"><i class="fa-solid fa-book"></i> Professional advice</div>
            <div class="div" id="div3"><i class="fa-solid fa-trophy"></i> The best model agency in the world</div>
        </div>
    </div>
</section>

<section class="ContactUs">
    <div class="iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122028.4452881155!2d72.4549168514255!3d23.06973667531764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e86742b6dc88f%3A0x759d5db9ab4771c4!2sSeawind%20Solution%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1699228534688!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
           
        </iframe>
    </div>
    <div class="container6">
        <div class="send">
            <div><i class="fa-solid fa-location-dot"></i></div>
            <div>Address</div>
            <div>------</div>
            <div>Ahmedabad</div>
        </div>
        <div class="send">
            <div><i class="fa-solid fa-envelope"></i></div>
            <div>Email</div>
            <div>------</div>
            <div>modeling@gmail.com</div>
        </div>
        <div class="send">
            <div><i class="fa-solid fa-phone"></i></div>
            <div>Phone</div>
            <div>------</div>
            <div>+91 12345 67890</div>
        </div>
        <div class="send">
            <div><i class="fa-solid fa-desktop"></i></div>
            <div>Portfolio</div>
            <div>------</div>
            <div>www.modeling.info</div>
        </div>
    </div>
        
    
</section>

<section class="last">
<footer>
    <div class="footer">
        <div class="logo"><i class="fa-brands fa-facebook-f"></i></div>
        <div class="logo"><i class="fa-brands fa-twitter"></i></div>
        <div class="logo"><i class="fa-brands fa-google"></i></div>
    </div>
    <div class="symbol">LOGO</div>
    <div class="copy">&#169; Copyright 2022 All Rights Reserved</div>
</footer>
</section>


</body>
</html>