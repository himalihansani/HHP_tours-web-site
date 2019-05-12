<?php
include('database.php');
?>

<?php


$name = "";
$password = "";
$userrole = "";

if(isset($_POST['inputEmail']))
{
	$name=$_POST["inputEmail"];
}

if(isset($_POST['inputPassword']))
{
	$password=$_POST["inputPassword"];
}


if(isset($_POST['submit'])){
	
  echo "<font color='blue'><h2>
     Name        : ".$name.
	"<br> Password     : ".$password."</h2></font>";
	
}

  $sql = "SELECT user_role FROM user where username='".$name."' AND password='".$password."'";
         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               $user_role= $row["user_role"];
               if($user_role==="Admin")
               {
              echo "<script> window.location.assign('indexAdmin.html'); </script>";
               }
               else if($user_role==="User")
               {

               // header( "Location: https://fgfh.000webhostapp.com/HHP_Tours%20%20Final%20Project/index.html");

               // window.location="index.html";
               // header( 'Location: index.html' );
                echo "<script> window.location.assign('home.html'); </script>";
               }
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
?>
