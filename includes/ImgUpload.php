<?php require_once 'db.php'; ?> 

<?php

    session_start();

    
  

    if (isset($_POST['submit'])){

        $id = $_SESSION['id'];

        $ImageName= $_FILES['img']['name'];
        $ImageError= $_FILES['img']['error'];
        $ImageSize= $_FILES['img']['size'];
        $ImageTmp= $_FILES['img']['tmp_name'];
        $ImageName= $_FILES['img']['name'];
        $ImageType= $_FILES['img']['type'];


            if($ImageError === 0){


                if($ImageSize > 5244500){

                    
                    
                    $err = "The file size is too big.";
                    header("Location: ../uploadImg.php?error=$err");



                }else{

                    $imgExtension = pathinfo($ImageName,PATHINFO_EXTENSION);
                    $imgNameLow = strtolower($imgExtension);
                    $ApprovedExten = array('png','jpg','jpeg');
                    
                    $resultImgTest = in_array($imgNameLow,$ApprovedExten);

                    if($resultImgTest === true){


                            $imgNewName = uniqid('IMG',true).".".$imgNameLow;
                            $imgfull= '../Upload/'.$imgNewName;
                            $imgPath = move_uploaded_file($ImageTmp,$imgfull); 

                                // putting into database 

                                $query = "UPDATE users SET img_url='$imgNewName' WHERE id = $id";
                                $result= mysqli_query($conn,$query);
                                
                                header("Location: ../profile.php?profile=success");



                    }else{

                        $err = "The extension is not supported";
                        header("Location: ../uploadImg.php?error=$err");

                    }

                       




                }









            }else{

                $err= "The image has unknown error.";

                header("Location: ../uploadImg.php?error=$err");

            }






        }