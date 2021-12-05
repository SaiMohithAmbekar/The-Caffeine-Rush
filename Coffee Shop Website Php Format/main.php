<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Caffeine Rush - Coffee Shop Website</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <img src="logo.png" alt="The Caffeine Rush">
            <label for="title">The Caffiene Rush</label>
        </div>

        <div class="mid">
            <ul>
                <li class="item"><a href="main.php">Home</a></li>
                <li class="item"><a href="#abtus">About Us</a></li>
                <li class="item"><a href="contactus.php">Contact Us</a></li>
                <li class="item"><a href="findus.php">Find Us</a></li>
            </ul>
        </div>

        <div class="right">
            <ul>
                <li class="item"><a>Welcome <?php echo $_SESSION['username']; ?> </a> </li>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="logout.php">Logout</a></li>
                <li class="item"><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>
    <section id="home">
        <h1 class="first center">Welcome To The Caffeine Rush</h1>
        <p>Coffee and Friends make the Perfect Blend.</p>
        <p>Life Begins after having Coffee!</p>
        <button class="btn"><a href="reservation.php">Reserve your table now</a></button>
    </section>

    <section class="aboutus-container">
        <h1 id="abtus" class="first center">About Us</h1>
        <div id="aboutus">
            <div class="box">
                <img src="ordering.png" alt="ordering">
                <h2 class="second center">Who We Are?</h2>
                <p class="center">The Caffiene Rush offers a unique coffee house environment unlike any other in Noida. We are not only a place to drop in and get your morning cup of coffee (although you are more than welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of coffee.</p>
            </div>
            <div class="box">
                <img src="relax.jpeg" alt="relax">
                <h2 class="second center">Our Speciality</h2>
                <p class="center">We offer a delicious variety of coffee from Starbucks made by our professionally trained baristas. We have everything from classic coffee to our house made specialty beverages. You can complete your coffee with one of our delicious sweet treats made by our very own baker, We look forward to serving you at Taste & See Coffee Shop and Gallery</p>
            </div>
            <div class="box">
                <img src="chill.jpeg" alt="relax">
                <h2 class="second center">Refresh & Chill</h2>
                <p class="center">If you need to work we have a seating area created specifically for you. If you need to rest, we have a soft-seating area in front of a stone fire place that is perfect for your weary mind and body. Come with your friends and chill here and we have great offers for students too just come with your ID Card.</p>
            </div>
        </div>
    </section>

    <section id="client-section">
        <h1 class="first center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="zomato.png" alt="Zomato">
                <img src="swiggy.png" alt="Swiggy">
            </div>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; The Caffeine Rush. All rights reserved!
        </div>
    </footer>
</body>

</html>