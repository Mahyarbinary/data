<?php 
$email = $_POST['email'];
$name = $_POST['name'];
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = $email ;
  fwrite($myfile, $txt);
  $txt = $name;
  fwrite($myfile, $txt);
  fclose($myfile);
 if (file_exists("newfile.txt")) {
   echo "Data Sent to server and write to newfile.txt Successfully";  
 }  
 
?>
