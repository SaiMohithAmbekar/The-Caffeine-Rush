<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Pacifico&display=swap" rel="stylesheet">    
    <title>Contact Us page</title>
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <img src="logo.png" alt="The Caffeine Rush">
            <label for="title">The Caffeine Rush</label>
        </div>

        <div class="mid">
            <ul>
                <li class="item"><a href="main.php">Home</a></li>
                <li class="item"><a href="main.php">About Us</a></li>
                <li class="item"><a href="contactus.php">Contact Us</a></li>
                <li class="item"><a href="findus.php">Find Us</a></li>
            </ul>
        </div>

        <div class="right">
            <ul>
                <li class="item"><a href="login.php">Login</a></li>
                <li class="item"><a href="logout.php">Logout</a></li>
                <li class="item"><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <section id="home">
        <h1 class="first">Welcome to The Caffeine Rush</h1>
        <p>Don't ever let anyone tell you that fairytales aren't real. I drink a potion made from magic beans everyday, and it brings me back to life.</p>
    </section>

    <section id="contact">
        <h1 class="first center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter Your Number">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="cobtn">
                    <button class="ctbtn"><a href="cu.php">Submit</a></button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; The Caffeine Rush. All rights reserved!
        </div>
    </footer>

</body>

</html>