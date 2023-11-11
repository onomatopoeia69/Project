
<?php require('includes/db.php'); ?>
<?php require('includes/functions.php'); ?>

<?php 


    if(isset($_POST['submit'])){

        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['pwd']);
        $password2 = mysqli_real_escape_string($conn,$_POST['pwd2']);


        $error=array();

        


        if(empty($username) || empty($email) || empty($password) ){

            $error['emptyform']= "Please fill up the form.";
           
        }

            if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$%^&+=!]).{12,16}$/',$password)){


                $error ['consist'] = "it must between 12-16 characters, mix of upper and lower case letter and at least one special char (Ex: MyP@ssword123)";



            }

            if($password !== $password2){

                $error['PasswordNotMatch']= "Password doesn't match.";


            } 

          



           $a = UsernameIdentify($conn, $username);
            if(isset($a)){
           $error['username']= $a;
            
            }

        
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

                
                 $error['email'] = "invalid email";
             }


            
            if(empty($error)){
                
            userAdd($conn, $username, $password, $email);

            header("Location: index.php");

            }      

    }
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>

    <div class="signUpContainer">
       
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="signUpContainer">
        
        <h5>SIGNUP</h5> 
        <input type="text" name="username" placeholder="username" value="<?php echo (isset($error['username']) || !isset($username)) ? '' : htmlspecialchars($username); ?>">
        <br>
        <input type="text" name= "email" placeholder="email" value="<?php echo (isset($error['email']) || !isset($email)) ? '' : htmlspecialchars($email); ?>"">
        <br>
        <input type = "password" name="pwd" placeholder="Enter password">
        <br>
        <input type = "password" name="pwd2" placeholder="re-enter password">
        <br>
        <input type="submit" name="submit" placeholder="Signup">
        <br>
        <a href="index.php">Back </a>
        <br>

       

    </form>
    <br>
    <div class="result">
    <?php echo (isset($error['consist'])) ? htmlspecialchars($error['consist']) : $error['consist'] =''; ?><br>
    <?php echo (isset($error['PasswordNotMatch'])) ? htmlspecialchars($error['PasswordNotMatch']) : $error['PasswordNotMatch'] =''; ?><br>
    <?php echo (isset($error['email'])) ? htmlspecialchars($error['email']) : $error['email'] =''; ?><br>
    <?php echo (isset($error['username'])) ? htmlspecialchars($error['username']) : $error['username'] =''; ?><br>
    <?php echo (isset($error['emptyform'])) ? htmlspecialchars($error['emptyform']) : $error['emptyform'] =''; ?>
    </div>
    </div>
    </div>

    <br>
</body>
</html>