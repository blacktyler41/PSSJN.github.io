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
         //read from database
         $query = "select * from users where user_name = '$user_name' limit 1";

         $result = mysqli_query($con, $query);

         if($result)
         {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: eBook.php");
                    die;
                }
            }
        
         }
         echo "wrong username or password!";
    }else
    {
         echo "wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eBook.css">
    <title>Login</title>
</head>
<body>
    <section id="login">
        <div class="login">
            <h1>Login</h1>
            <form method="POST">
                <label>Username</label>
                <input type="text" name="user_name" required>
                <label>Password</label>
                <input type="password" name="password" required>
                <input type="submit" name="" value="Login">
            </form>
           <p>Not have an account?<a href="signup.php">Sign up here</a></p>
        </div>
    </section>
</body>
</html>