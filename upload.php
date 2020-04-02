<?php
      require "connection.php";
  

     
    
     $id=$_POST['id'];
     $image=$_POST['image'];
     $file_path ="uploads/$id.jpeg";
     $path="https://www.webrooper.com/androiddb/".$file_path;
     
     $sql="UPDATE myuser SET imgurl='$path' WHERE id='$id'";
     
     if(mysqli_query($conn,$sql))
     {
         
         if(file_put_contents($file_path,base64_decode($image)))
         {
             
             $result['success']='1';
             $result['message']='success';
             
             echo json_encode(array("success"=>'1',"message"=>'success'));
             mysqli_close($conn);
             
         }
         
         
         
     }
     ?>
