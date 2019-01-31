<?php
      echo 'Will print a newline<br/>';
$servername = "fdb19.awardspace.net";
$username = "2646037_leaderboard";
$password = "admin000";
$dbname = "2646037_leaderboard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 

$sql = "UPDATE progress SET station_1='34' WHERE team_name= 'red' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

    


	
/* don't look at this stuff	
	if (1 == 1) {
		echo "
"; }


$sql = "UPDATE progress
SET station1_score= 777, station2_score= 165
WHERE team_name= red"; 


*/




?>

