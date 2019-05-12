<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

.btn1 {
    background-color: Red;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn1:hover {
    background-color: Orange;
}

.btn btn-info btn-lg {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn btn-info btn-lg:hover {
    background-color: Purple;
}

</style>
<?php
require('database.php');
?>

<?php
echo "<table id='customers'><tr><th>ID</th><th>Name</th><th>Title</th><th>Country</th><th> Email </th><th> Tel </th><th> Count </th><th> Arrival </th><th> Departure </th><th> Rooms </th><th> Meal_type </th><th> Hotel_type </th><th> Pkg</th><th> Msg_sp </th></tr>";
$sql= "SELECT * FROM booking";
$result = $conn->query($sql);

if($result->num_rows > 0)

{
	 while($row = $result->fetch_assoc()) {
		 ?>
        
		<tr>
		<td><?php echo $row["id"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["title"];?></td>
		<td><?php echo $row["country"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["tel"];?></td>
		<td><?php echo $row["count"];?></td>
		<td><?php echo $row["arrival"];?></td>
		<td><?php echo $row["departure"];?></td>
		<td><?php echo $row["rooms"];?></td>
		<td><?php echo $row["meal_type"];?></td>
		<td><?php echo $row["hotel_type"];?></td>
		<td><?php echo $row["pkg"];?></td>
		<td><?php echo $row["msg_sp"];?></td>

		<td><button class="btn btn-info btn-lg"> <span class="glyphicon glyphicon-edit"></span><a href="modarete.php?id=<?php echo $row["id"];?>"> Edit </a></button></td>
		<td><button class="btn1"><i class="fa fa-close"></i><a href="modarete.php?id=<?php echo $row["id"];?>"> Delete </a> </button></td>
		
		</tr>
		<?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>



        
      