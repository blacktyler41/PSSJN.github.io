<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
             //save to database
             $user_id = random_num(20);
             $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

             mysqli_query($con, $query);

             header("Location: login.php");
             die;
        }else
        {
             echo "Please some valid information!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eBook.css">
    <title>signup</title>
</head>
<body>
    <section id="signup">
        <div class="signup">
            <h1>Sign up</h1>
            <h4>It's free and only takes a minute</h4>
            <form method="POST">
                <label>Username</label>
                <input type="text" name="user_name" required>
                <label>Password</label>
                <input type="password" name="password" required>
                <input type="submit" name="" value="Submit">
            </form>
            <p>By clicking the sign up button,you agree to our <br>
            <a href="">Terms and Conditions</a> and <a href="#">Policy Privacy</a>
           </p>
           <p>Already have account? <a href="login.php">Login here</a></p>
        </div>
    </section>

    
</body>
</html>