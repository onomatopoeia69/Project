
<?php require ('includes/db.php'); ?>
<?php require('includes/functions.php'); ?>

<?php session_start(); ?>

<?php


    if(isset($_SESSION['id'])){

        header('Location: profile.php');
    
    }




        if(isset($_POST['submit'])){

        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['pwd']);
        $error = array();

    

        $sql = "SELECT * FROM users where username= '$username'" ;// msli 
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
   
             if(empty($username)|| empty($password)){

            $error['empty'] = "Please input Username and Password";

                }

                

            foreach ($result as $results){



                     
            if($username === $results['username'] && password_verify($password,$results['password'])){


                $_SESSION['email'] = $results['email'];
                $_SESSION['id'] = $results['id'];
                $_SESSION['create_at'] = $results['create_at'];
                $_SESSION['username'] = $results['username'];

                    header("Location: profile.php");

                 }
    }

            $error['LoginError'] = "Username or Password are invalid.";
   
}

       
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    

<?php echo (isset($error['LoginError'])) ? htmlspecialchars($error['LoginError']) : $error['LoginError'] =''; ?><br>
<?php echo (isset($error['empty'])) ? htmlspecialchars($error['empty']) : $error['empty'] =''; ?>

<div class="indexContainer">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

    <div class="container">
    <h3>Login</h3>
    <input type="text" name="username" placeholder="Username">
    <br>
    <input type="password" name= "pwd" placeholder="Password">
    <br>
    <input type="submit" name="submit" placeholder="submit">
    <br>
    <a href="signup.php">Signup</a>
    
    </div>
</form>
    



    

    </div>
</body>
</html>