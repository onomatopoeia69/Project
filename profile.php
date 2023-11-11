<?php session_start(); ?>
<?php require_once 'includes/functions.php' ?>
<?php require_once 'includes/db.php' ?>

<?php 



   
if(!isset($_SESSION['id'])){

    header("Location: index.php");

    }

    $id= $_SESSION['id'];
    

?>

<?php require_once 'includes/Header.php'; ?> 


     <h5>WELCOME <?php echo $_SESSION['username']; ?> </h5>



   
    <?php
             $a = Fetchall($conn,$id ); 
            


            if(mysqli_num_rows($a) > 0){ 


                   
                while($rows = mysqli_fetch_assoc($a)){
                    
                        $_SESSION['img'] = $rows['img_url'];?>
                    
                    

                    <div class="alb" id="profilePicture">
                   
                    <?php  echo ($rows['img_url']) ?  "<img src='Upload/{$rows['img_url']}'> " : '<p> No Profile </p>' ; ?>
                     
                    
                     </div>
                       
                               
                     <?php
                                
                } 

            }
            
            ?>



    <a href='view_pic.php?pic=<?=  $_SESSION['img']; ?>'>SEE PROFILE</a><br>
    <a href="uploadImg.php">UPLOAD PROFILE</a>      



  
    <p>Date Created : <?php echo htmlspecialchars($_SESSION['create_at']); ?></p>
    <p>Email : <?php echo htmlspecialchars($_SESSION['email']); ?></p>

    

    


<?php require_once 'includes/Footer.php'; ?>