<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<?php
require('database.php');
?>
<?php
$id=$_GET["id"];
//echo $id;

$sql="SELECT * FROM booking WHERE id='$id' LIMIT 0,1";
$result = $conn->query($sql);
$row= mysqli_fetch_assoc($result);
//print_r($row['id']);
?>

<body>

<center><h3>UPDATE/DELETE</h3></center>

<div>
 
  
  <form class="contact_form" action="ed.php" method="POST" name="contact_form">


<input type="text" name="id" value="<?php echo $row['id'];?>">
<input type="text" name="name" id="datepicker"  placeholder="Full name" value="<?php echo $row['name'];?>"> 

<select name="title"  placeholder="Tittle" value="<?php echo $row['title'];?>">
<option value="" selected="selected">Tittle</option>
<option value="Mr.">Mr.</option>
<option value="Ms.">Ms.</option>
<option value="Miss.">Miss.</option>
<option value="Rev.">Rev.</option>
<option value="Dr.">Dr.</option>
</select>

<input type="text" name="country" id="datepicker"  placeholder="Country" value="<?php echo $row['country'];?>"> 

<input type="text" name="email" id="datepicker"  placeholder="E-mail Address" value="<?php echo $row['email'];?>"> 
<input type="text" name="tel"   id="datepicker"  placeholder="Telephone Number with country code" value="<?php echo $row['tel'];?>"> 
<input type="text" name="count"  placeholder="Number of People Travelling" value="<?php echo $row['count'];?>">
<input type="text" name="arrival" placeholder="Arrival Date" value="<?php echo $row['arrival'];?>"> 
<input type="text" name="departure"  placeholder="Departure Date" value="<?php echo $row['departure'];?>" > 
<input type="text" name="rooms" placeholder="No of Rooms Required" value="<?php echo $row['rooms'];?>">  

<select name="meal_type"  placeholder="Meal Type" value="<?php echo $row['meal_type'];?>" >
<option value="">Please Select Meal Type</option>
<option value="BB (Bread &amp; Breakfast)">BB (Bread &amp; Breakfast)</option>
<option value="HB (Half Board)">HB (Half Board)</option>
<option value="FB (Full Board)">FB (Full Board)</option>
</select>
 
<select name="hotel_type"  placeholder="Hotel Type" value="<?php echo $row['hotel_type'];?>">
<option value="">Please Select Hotel type</option>
<option value="Standard Guest Houses">Standard Guest Houses</option>
<option value="Standard Hotels">Standard Hotels</option>
<option value="Boutique & Villas">Boutique & Villas</option>
<option value="3 Star Hotels">3 Star Hotels</option>
<option value="4 Star Hotels">4 Star Hotels</option>
<option value="5 Star Hotels">5 Star Hotels</option>
</select>

<select name="pkg"  placeholder="Tour Package name" value="<?php echo $row['pkg'];?>">
<option value="">Select Your Tour Package</option>
<option value="Pearl of Ceylon Tour Pkg (05 Days 04 Nights)"> Pearl of Ceylon Tour Pkg (05 Days 04 Nights)</option>
<option value="Culture & Nature Tour Pkg (06 Days 05 Nights)"> Culture & Nature Tour Pkg (06 Days 05 Nights)</option>
<option value="Mini Tour Pkg (02 Days 01 Nights)">Mini Tour Pkg (02 Days 01 Nights)</option>
</select>

<textarea name="msg_sp" placeholder="Special Notes / Special Requests"  value="<?php echo $row['msg_sp'];?>"></textarea>

<input type="submit" name="submit" class="submit" value="Submit Request" > 

		<center><input type="submit" value="EDIT" name="EDIT" size="30"></center> &nbsp&nbsp <center><input type="submit" value="DELETE" name="DELETE" size="30"></center>

</form>
</div>

</body>
</html>




