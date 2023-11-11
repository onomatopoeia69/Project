<?php
    session_start();

    if(!isset($_SESSION['id'])){

        header("Location: index.php");


    }



?>



   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['error'])){ ?>

    <p> <?php echo $_GET['error']; ?> </p>

        <?php } ?>

        

    
    <form action="includes/ImgUpload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="img">
    <input type="submit" name="submit" value="upload">
    </form>    


</body>
</html>