<?php
include('database.php');
?>

<?php

$cont_id = "";
$name = "";
$country = "";
$email = "";
$contact = "";
$msg = "";
$submit="";

if(isset($_POST['cont_id']))
{
	$cont_id=$_POST["cont_id"];
}

if(isset($_POST['name']))
{
	$name=$_POST["name"];
}

if(isset($_POST['country'])){
  $country=$_POST["country"];
}

if(isset($_POST['email'])){
  $email=$_POST["email"]; 
}
if(isset($_POST['contact'])){
  $contact=$_POST["contact"];
}

if(isset($_POST['msg'])){
  $msg=$_POST["msg"]; 
}

if(isset($_POST['submit'])){
	
  echo "<font color='blue'><h2>
          Id          : ".$cont_id.
    "<br> Name        : ".$name.
	"<br> Country     : ".$country.
	"<br> email       : ".$email.
	"<br> Telephone No: ".$contact.
	"<br> special msg : ".$msg."</h2></font>";
	
}

$sql="INSERT INTO contacts (name, country, email, contact,msg ) VALUES ('$name','$country','$email','$contact','$msg')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
