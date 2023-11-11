<?php include("db.php"); ?>
<?php include("functions.php"); ?>
<?php


        $try= "carl";
       


        $sql = "SELECT password from users WHERE id=19";
        $stmt = mysqli_query($conn,$sql);
        $result= mysqli_fetch_assoc($stmt);
        $hash =$result['password'];
        
        if (password_verify($try,$hash)){

            echo "yes";

        }else{

            echo "no";
        }

        

            $username ="boy";
      
        UsernameIdentify($conn, $username);


?>