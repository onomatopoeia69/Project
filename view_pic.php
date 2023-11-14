


<?php


    session_start();

    if (!isset($_SESSION['id'])){

        header("Location: index.php");

    }


    if(isset($_GET['pic'])){

        $image = $_GET['pic'];

    }



    ?>

    
    <?php require_once 'includes/Header.php'; ?>
    <?php  echo ($image) ?  "<img src='Upload/{$image}'>" : '<p> No Profile </p>' ; ?>
    <a href="profile.php?profile=success"> BACK </a>
    <?php require_once 'includes/Footer.php'; ?>