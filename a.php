<?php
require "con.php";
session start();
$Name=$_POST["name"];
$Email=$_POST["email"];
$Password=$_POST[""];
$Contact=$_POST["contact"];
$Feedback=$_POST["feedback"];
  if(isset($_POST['SUB']))
   {
    $db=("Name","Email","Password","Contact","Feedback");
    function myfunction()
    {
      $sql="INSERT INTO info(Name,Email,Contact,Feedback) VALUES('$name,$email,$contact,$feedback)";
      $query="SELECT * FROM table_user WHERE('user_email='$email' AND 'Password'=$'Password');
      $result=mysqli_query($sql)or die("Error in loading");
   }
  }
?>
      
