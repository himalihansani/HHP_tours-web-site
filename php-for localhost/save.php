<?php
include('database.php');
?>
<?php

$name = "";
$title = "";
$country = "";
$email = "";
$tel = "";
$count = "";
$arrival = "";
$departure = "";
$rooms = "";
$meal_type = "";
$hotel_type = "";
$pkg = "";
$msg_sp = "";
$submit="";

if(isset($_POST['name']))
{
	$name=$_POST["name"];
}

if(isset($_POST['title']))
{
	$title=$_POST["title"];
}

if(isset($_POST['country'])){
  $country=$_POST["country"];
}

if(isset($_POST['email'])){
  $email=$_POST["email"]; 
}

if(isset($_POST['tel'])){
  $tel=$_POST["tel"];
}

if(isset($_POST['count'])){
  $count=$_POST["count"];
}

if(isset($_POST['arrival'])){
  $arrival=$_POST["arrival"];
}

if(isset($_POST['departure'])){
  $departure=$_POST["departure"];
}

if(isset($_POST['rooms'])){
   $rooms=$_POST["rooms"];
}


if(isset($_POST['meal_type'])){
  $meal_type=$_POST["meal_type"];
}

if(isset($_POST['hotel_type'])){
  $hotel_type=$_POST["hotel_type"];
}

if(isset($_POST['pkg'])){
  $pkg=$_POST["pkg"];
}

if(isset($_POST['msg_sp'])){
  $msg_sp=$_POST["msg_sp"];
}


if(isset($_POST['submit'])){
	
  echo "<font color='orange'><h2>
          Name           : ".$name.
	"<br> Title          : ".$title.
	"<br> Country        : ".$country.
	"<br> email          : ".$email.
	"<br> Telephone No   : ".$tel.
	"<br> Num_of_peoples : ".$count.
	"<br> Arrival Date   : ".$arrival.
	"<br> Departure Date : ".$departure.
	"<br> rooms          : ".$rooms.
	"<br> meal_type      : ".$meal_type.
	"<br> hotel_type     : ".$hotel_type.
	"<br> pkg            : ".$pkg.
	"<br> msg_sp         : ".$msg_sp."</h2></font>";
	
	
	
}

$sql="INSERT INTO booking (name, title, country, email, tel, count, arrival, departure, rooms, meal_type, hotel_type,pkg, msg_sp) VALUES ('$name','$title','$country','$email','$tel','$count','$arrival','$departure','$rooms','$meal_type','$hotel_type','$pkg','$msg_sp')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
