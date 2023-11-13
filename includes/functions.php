<?php require('db.php') ?>



<?php


    function userAdd($conn, $username, $password, $email){



        $query= "INSERT INTO users (username,password,email) VALUES (?,?,?)";
        $stmt= mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$query)){

            echo "not connected";

        }else{

            $option= array('dif'=> 12);
            $passwordhash = password_hash($password,PASSWORD_BCRYPT,$option); 

            mysqli_stmt_bind_param($stmt,'sss',$username,$passwordhash,$email);

            mysqli_stmt_execute($stmt);

            
        }


    }

    function UsernameIdentify($conn, $username){



        $sql = "SELECT username FROM users where username= '$username' ";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
        

        foreach ($result as $results){

        if($username === $results['username']){

            $return =  "username"." ".$username." "."already exist";
            return $return;
            
        }
        
    }

    }

    function fetchingData($result){

        if($result > 0){

            
            $_SESSION['email'] = $result['email'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['create_at'] = $result['create_at'];
            $_SESSION['username'] = $result['username'];


            header("Location: profile.php");
        }


    }


    function Fetchall($conn,$id ){

        $sql = "SELECT img_url FROM users where id=$id";
        $result= mysqli_query($conn,$sql);
        
        return $result;


    }


    function timeGreet(){


        $int=date("H:i:s");


        if($int >= 0 && $int < 12){
   
   
          echo "GoodMorning";
   
       }
       elseif($int > 12 && $int < 17 )
       {
   
           echo "Good Afternoon";
   
       }else{
           echo "Good Evening";
       }
   

    }