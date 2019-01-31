<!--<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
--> 

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


$sql = "UPDATE progress SET station1_score = 554, station2_score = 2 WHERE (team_name= 'red')";




//$sql = "UPDATE progress
//SET station1_score=15, station2_score=155
//WHERE team_name=red"; 

// define variables and set to empty values
$nameErr = "";
$name = "";



//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /*if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    //$name = test_input($_POST["name"]);
    $name = ($_POST["name"]);
        if (preg_match('#\\beasy\\b#',$name)) {

$sql = "UPDATE progress SET station1_score = 554, station2_score = 2 WHERE (team_name= 'red')";
        $nameErr = "data inputted";
    }
    else {
        $nameErr = "data not entered";
    }
  }*/
  

//}

/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/



mysqli_close($conn);

?>
<!--
<h2>PHP Form Validation Example</h2>
<!--<p><span class="error">* required field.</span></p>-->


<!--
</body>
</html>-->