<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Pacifico&display=swap" rel="stylesheet"></head>
    
</head>

<body>
    <div class="container">
        <form id="signup" class="form" action="validation.php" method="post">

            <h2><u>Login to your Account</u></h2>
            <div class="form-elements">
                <label for="name">Username:</label>
                <input type="text" name="name" class="name" placeholder="Enter Name" autocomplete="off" required>
                <small></small>
            </div>
            
            <div class="form-elements">
                <label for="password">Password:</label>
                <input type="password" name="password" class="password" placeholder="Enter Password" autocomplete="off" required>
                <small></small>
            </div>
            
            <div class="form-elements">
                <button type="submit" class="btn">Login</button>
            </div>
            <a href="signup.php">New User Please Signup first</a>
        </form>
    </div>

</body>

</html>