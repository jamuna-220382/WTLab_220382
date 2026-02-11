<?php 
$tarfolder="uploads/";
$filename=basename($_FILES["myfile"]["name"]);
$targetfolder=$tarfolder . $filename;
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$targetfolder)){
      echo "file uploaded successfully";
      echo "<a href='download.php ?file=$filename'>Download File</a>";
} 
      else{echo "file not uploaded";}
?>