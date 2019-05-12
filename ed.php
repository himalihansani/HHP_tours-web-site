

<?php
require('database.php');
?>

<?php
$name = "";
$id = "";
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

if(isset($_POST['id']))
{
  $id=$_POST["id"];
}
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




if(isset($_POST['EDIT']))
{

$sql = "UPDATE booking SET Name='".$name."', Title ='".$title."',  Country ='".$country."', Email ='".$email."', Tel ='".$tel."', Count='".$count."',  Arrival='".$arrival."', Departure='".$departure."', Rooms='".$rooms."', Meal_type='".$meal_type."', Hotel_type='".$hotel_type."', Pkg='".$pkg."', Msg_sp='".$msg_sp."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}

if(isset($_POST['DELETE']))
{
	$sql = "DELETE FROM booking WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


}

// header("location:view.php");

?>











