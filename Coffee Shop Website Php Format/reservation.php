<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Pacifico&display=swap" rel="stylesheet"></head>

</head>

<body>
    <div class="container">
        <form id="signup" class="form">

            <h2><u>Reserve Your Table</u></h2>
            <div class="form-elements">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter Email" autocomplete="off">
                <small></small>
            </div>

            <div class="form-elements">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter Name" autocomplete="off">
                <small></small>
            </div>

            <div class="form-elements">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone" placeholder="Enter Phone" autocomplete="off">
                <small></small>
            </div>

            <div class="form-elements">
                <label for="date">Date and Time:</label>
                <input type="datetime-local" name="data" id="date" placeholder="Choose your Timing" autocomplete="off">
                <small></small>
            </div>
            
            <div class="form-elements">
                <input type="reset" value="Reset" class="btn">
                <button class="btn"><a href="rr.php">Reserve your Table</a></button>
            </div>
        </form>
    </div>

    <script src="signup.js"></script>

</body>

</html>