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
echo "<table id='customers'><tr><th>Cont_ID</th><th>Name</th><th>Country</th><th> Email </th><th> Contact </th><th> Msg </th></tr>";
$sql= "SELECT * FROM contacts";
$result = $conn->query($sql);

if($result->num_rows > 0)

{
	 while($row = $result->fetch_assoc()) {
		 ?>
        
		<tr>
		<td><?php echo $row["cont_id"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["country"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["contact"];?></td>
		<td><?php echo $row["msg"];?></td>
		</tr>
		<?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>



        
      