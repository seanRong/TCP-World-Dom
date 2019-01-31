<?php
$servername = "localhost";
$username = "id4899951_sean";
$password = "admin";
$dbname = "id4899951_scores_leaderboard_progress";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




// check for submission
// retrieve value from posted data
if ($_POST['submit'])
{
    echo "You entered the number "; }



	
// don't look at this stuff	
	if (1 == 1) {
		echo "
"; }


$sql = "UPDATE progress
SET station1_score= 777, station2_score= 165
WHERE team_name= red"; 







?>

