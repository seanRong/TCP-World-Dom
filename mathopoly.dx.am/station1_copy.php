<!DOCTYPE HTML>
<html> 
 <!-- Current situation: everything is very very messy
 
 TESTING PURPOSES ONLY: answers are easy medium hard-->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function loaddata()
{
 var name=document.getElementById( "username" );
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'loaddata.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   // We get the element having id of display_info and put the response inside it
   $( '#display_info' ).html(response);
  }
  });
 }
	
 else
 {
  $( '#display_info' ).html("Please Enter Some Words");
 }
}

</script>

</head>


<body  onload='stealth()'  class="w3-light-grey">

<input type="text" name="username" id="username" onkeyup="loaddata();">
<div id="display_info" >
</div>

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <span class="w3-bar-item w3-left">Mathopoly (team identifier?)</span>
</div>

  <div class="w3-container">
    <h6>Spacing</h6>
  </div>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:30px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-globe"></i> Current World Status</b></h5>
  </header>
<!--
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3">

        <div class="w3-left">
        <iframe id = "iframe" height = "600" width = "1300" style="background-image:url(map_enlarged.png); background-size: contain;">
                
				<div class="w3-row">
  <div class="w3-col s6 w3-green w3-center"><p>s6</p></div>
  <div class="w3-col s6 w3-dark-grey w3-center"><p>s6</p></div>
</div>
               
          </iframe>
        </div>
     </div>
  </div>
  -->
  
  <?php
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


echo "<div class='w3-container' style='background-image:url(map_enlarged.png);'>";


//empty row 1
echo "<div class='w3-row'>";

echo "<div class='w3-col s12 w3-center'>" . "<br><br><br><br>" . "</div>";

echo "</div>";



//empty row 2
echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s12 w3-center'>" . "<br><br><br>" . "</div>";

echo "</div>";



//row 3

echo "<div class='w3-row'  height:200px;>";

echo "<div class='w3-col s1 w3-center'>" . "<br><br><br>" . "</div>";
echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Canada<br>";
    echo "Security level: " . $row["st1"];
    }
echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";
echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";
echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Sweden<br>";
    echo "Security level: " . $row["st2"];
    }

echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Russia<br>";
    echo "Security level: " . $row["st3"];
    }
echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";
echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";
echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";

echo "</div>";



//row 4

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s5 w3-center'>" . "<br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Britain<br>";
    echo "Security level: " . $row["st4"];
    }
echo "</div>";


echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Ukraine<br>";
    echo "Security level: " . $row["st5"];
    }

echo "</div>";

echo "<div class='w3-col s5 w3-center'>" . "<br>" . "</div>";

echo "</div>";




//row 5

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s2 w3-center'>" . "<br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "United States<br>";
    echo "Security level: " . $row["st6"];
    }
echo "</div>";

echo "<div class='w3-col s3 w3-center'>" . "<br><br><br><br>" . "</div>";


echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Greece<br>";
    echo "Security level: " . $row["st7"];
    }

echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "China<br>";
    echo "Security level: " . $row["st8"];
    }

echo "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "North Korea<br>";
    echo "Security level: " . $row["st9"];
    }

echo "</div>";

echo "<div class='w3-col s2 w3-center'>" . "<br>" . "</div>";



echo "</div>";




//row 6

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s2 w3-center'>" . "<br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Mexico<br>";
    echo "Security level: " . $row["st6"];
    }
echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br><br><br>" . "</div>";


echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Jamaica<br>";
    echo "Security level: " . $row["st7"];
    }

echo "</div>";

echo "<div class='w3-col s2 w3-center'>" . "<br>" . "</div>";

echo "<div class='w3-col s1 w3-center'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Egypt<br>";
    echo "Security level: " . $row["st8"];
    }

echo "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "India<br>";
    echo "Security level: " . $row["st9"];
    }

echo "</div>";

echo "<div class='w3-col s3 w3-center'>" . "<br>" . "</div>";



echo "</div>";



//row 7

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s5 w3-center'>" . "<br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Senegal<br>";
    echo "Security level: " . $row["st6"];
    }
echo "</div>";

echo "<div class='w3-col s4 w3-center'>" . "<br><br><br>" . "</div>";


echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Philippines<br>";
    echo "Security level: " . $row["st7"];
    }

echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br>" . "</div>";


echo "</div>";



//row 8

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s3 w3-center'>" . "<br><br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Peru<br>";
    echo "Security level: " . $row["st6"];
    }
echo "</div>";

echo "<div class='w3-col s8 w3-center'>" . "<br><br><br>" . "</div>";


echo "</div>";



//row 9

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s4 w3-center'>" . "<br><br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Brazil<br>";
    echo "Security level: " . $row["st6"];
    }
echo "</div>";

echo "<div class='w3-col s2 w3-center'>" . "<br><br><br>" . "</div>";


echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Madagascar<br>";
    echo "Security level: " . $row["st7"];
    }

echo "</div>";

echo "<div class='w3-col s4 w3-center'>" . "<br>" . "</div>";


echo "</div>";



//row 10

echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s9 w3-center'>" . "<br><br><br>" . "</div>";

echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";
$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "Australia<br>";
    echo "Security level: " . $row["st6"];
    }
echo "</div>";

echo "<div class='w3-col s1 w3-center'>" . "<br><br><br>" . "</div>";


echo "<div class='w3-col s1 w3-center' onclick = 'status()'>";

$sql = "SELECT * FROM leaderboard WHERE holder = 'new'";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)) {
    echo "New Zealand<br>";
    echo "Security level: " . $row["st7"];
    }

echo "</div>";

echo "</div>";


//empty row 11
echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s12 w3-center'>" . "<br><br><br>" . "</div>";

echo "</div>";



//empty row 12
echo "<div class='w3-row' height:200px;>";

echo "<div class='w3-col s12 w3-center'>" . "<br><br><br>" . "</div>";

echo "</div>";


echo "</div>";



$conn->close();

?> 

  <!-- status?-->
	<div class="w3-panel w3-pale-red w3-leftbar w3-rightbar w3-border-red w3-margin-right">
		<p>A E S T H E T I C S</p>
	</div>

	<div class="w3-panel w3-pale-green w3-leftbar w3-rightbar w3-border-green w3-margin-right">
		<p>Current number of territories held? (currently static)</p>
	</div>

<iframe name="bait" style="display:none;"></iframe>

<div id= 'tag1'>



<span> This is an easy question

    <form>
    
		<div>
            <label for='answer1'>Answer:</label>
            <input type='value' name='answer1' id='answer1' onkeyup='checkPass1(); return false;'><br>
            <span id='confirmMessage1' class='confirmMessage1'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='take'>
</form>


<br>
<br>


<button class="accordion">Section 1</button>
<div class="panel">

<span> This is a medium question

    <form>
      
		<div>
            <label for='answer2'>Answer:</label>
            <input type='value' name='answer2' id='answer2' onkeyup='checkPass2(); return false;'><br>
            <span id='confirmMessage2' class='confirmMessage2'></span>
        </div>
        <br>

    </form>
</span>




<div id= 'tag3'>
<form action=""onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2'>
</form>
<br>  
<br>  

</div>
</div>



<button class="accordion">Section 2</button>
<div class="panel">
<span> This is a hard question

    <form>
      
		<div>
            <label for='answer3'>Answer:</label>
            <input type='value' name='answer3' id='answer3' onkeyup='checkPass3(); return false;'><br>
            <span id='confirmMessage3' class='confirmMessage3'></span>
        </div>
        <br>

    </form>
</span>
</div>

<div id= 'tag4'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3'>
</form>

<br><br>

</div>
</div>




<!-- JS stuff is down here -->

<script>
// at this point, i trust you to know how to troubleshoot this. if it aint broke dont go fixin it
window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);

    

function status() {
alert("First attack successful!");


}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

function stealth() {
 
	var tag2 = document.getElementById('tag2');
	var tag3 = document.getElementById('tag3');
	var tag4 = document.getElementById('tag4');

	

	
	if (tag2.style.display === 'none') {
        tag2.style.display = 'block';
    } else {
        tag2.style.display = 'none';
    }
	if (tag3.style.display === 'none') {
        tag3.style.display = 'block';
    } else {
        tag3.style.display = 'none';
    }
	if (tag4.style.display === 'none') {
        tag4.style.display = 'block';
    } else {
        tag4.style.display = 'none';
    }
	
	}



function checkPass1()
{
    var message1 = document.getElementById('confirmMessage1');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1.value == 'easy'){
		tag2.style.display = 'block';
		answer1.style.backgroundColor = goodColor;
		message1.style.color = goodColor;
        message1.innerHTML = 'That is correct!'		
	}
	else{
		answer1.style.backgroundColor = badColor;
		}
}  

function checkPass2()
{
    var message2 = document.getElementById('confirmMessage2');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2.value == 'medium'){
		tag3.style.display = 'block';
		answer2.style.backgroundColor = goodColor;
		message2.style.color = goodColor;
        message2.innerHTML = 'That is correct!'
	}
	else{
		answer2.style.backgroundColor = badColor;
		message2.style.color = badColor;
        message2.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3()
{
    var message3 = document.getElementById('confirmMessage3');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3.value == 'hard'){
		tag4.style.display = 'block';
		answer3.style.backgroundColor = goodColor;
		message3.style.color = goodColor;
        message3.innerHTML = 'That is correct!'
	}
	else{
		answer3.style.backgroundColor = badColor;
		message3.style.color = badColor;
        message3.innerHTML = 'Incorrect. Please try again.'
		}
}  


</script>


<?php
if ($_POST['take']) {

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
 
 

$sql = "UPDATE progress SET station_1='888' WHERE team_name= 'red' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("First attack successful!")';
        echo '</script>';
}

if ($_POST['take2']) {

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
 

$sql = "UPDATE progress SET station_1='442' WHERE team_name= 'red' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Invasion successful. You have gained a foothold!")';
        echo '</script>';

}

if ($_POST['take3']) {

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
 

$sql = "UPDATE progress SET station_1='993' WHERE team_name= 'red' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory dominated. Successfully permalocked all other teams.")';
        echo '</script>';

}



?>



</body>
</html>