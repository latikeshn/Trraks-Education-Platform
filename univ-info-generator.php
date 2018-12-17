<?php 
include("configure.php");
$COUNTRY = $_POST['Country'];
$WORLD_RANK = $_POST['worldrank'];
// echo $COUNTRY."\n";
// echo $WORLD_RANK."\n";


$select = "SELECT * FROM `$COUNTRY` WHERE `UNIVERSITY_RANK`='$WORLD_RANK'";
$select = $conn->query($select);

if($select->num_rows > 0 )
{
				 $row = mysqli_fetch_all($select,MYSQLI_ASSOC);
		         echo json_encode($row);
}

?>