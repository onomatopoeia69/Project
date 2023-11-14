
<?php require_once 'includes/functions.php'; ?>
<?php 
    $name=strtoupper($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <style type="text/css">
        .brand{
            background: yellowgreen !important;
        }
        .brand-text{

            color:yellowgreen !important;
        }

        form{

            max-width: 460px;
            margin: 20px auto;
            padding: 20px;

        }
        </style>

</head>
<body class= "#bdbdbd grey lighten-1" >

    <nav class="black z-depth-0">
        <div class= "container" >
            <a href='profile.php' class= "brand-logo brand-text">EARTH</a>
            <ul id=" nav-mobile" class="right hide-on-small-and-down">
                    
          
            
                  <li><a href="includes/logout.php" class="btn brand z-depth-0">SHOP</a></li>
                <li><a href="includes/logout.php" class="btn brand z-depth-0"> LOGOUT</a></li>
                <li class="grey-text"><?php timeGreet($name);?></li>
             
               
              
                
            </ul>
        </div>
    </nav>




    
