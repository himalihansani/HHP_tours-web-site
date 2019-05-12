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
		</tr>
		<?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>



        
      