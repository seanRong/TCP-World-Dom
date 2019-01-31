<form name="form" action="" method="get">
  <input type="text" name="answer1" id="answer1" value="Question 1">
</form>

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



echo $_GET['answer1'];/* == 'easy') {$sql = "UPDATE progress
SET station1_score= 55, station2_score= 16555
WHERE team_name= red"; }*/

?>