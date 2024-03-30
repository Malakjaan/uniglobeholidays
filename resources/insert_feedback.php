<?php

if(isset($_POST['btn_save_comment_detail'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $rating= $_POST['rating']; 
     $query = "INSERT INTO tbl_feedback(name, email, message, rating) 
      VALUES('$name','$email','$message','$rating')";
       $result = mysqli_query($dbcon, $query);
       if($result) {
           echo 200;
       } else {
           echo mysqli_error($dbcon); 
       }
   }

?>