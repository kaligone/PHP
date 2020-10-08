<html>
<h3>Upload your file here</h3>
<form action='q3_file_upload.php' method='POST' enctype='multipart/form-data'>
  <input type='file' name='new_file'><p>
  <input type='submit' name='upload' value='upload'>

</html>

<?php

   if(isset($_FILES['new_file']))
   {
      $name = $_FILES['new_file']['name'];
      $type = $_FILES['new_file']['type'];
      $size = $_FILES['new_file']['size'];
      $temp_location = $_FILES['new_file']['tmp_name'];
      $error = $_FILES['new_file']['error'];


      if ($error > 0)
      {
          die("Failed to upload file .....");
      }
      else
      {
         echo "<br><br>".$name."<br><br>".$type."<br><br>".$size."<br><br>".$temp_location;
      }
   }

?>
