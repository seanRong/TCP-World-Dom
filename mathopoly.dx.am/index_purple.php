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
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
</style>


<body  onload='stealth()'  class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <span class="w3-bar-item w3-left">Mathopoly (Red Team)</span>
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

  <!--<div class="w3-row-padding w3-margin-bottom">
    <div class="w3">

        <div class="w3-left">
        <iframe id = "iframe" height = "600" width = "1300" style="background-image:url(map_enlarged.png);">
                
               
          </iframe>
        </div>
     </div>
  </div>-->

  <!-- status?-->
	<div class="w3-panel w3-pale-red w3-leftbar w3-rightbar w3-border-red w3-margin-right">
		<p>Aim to conquer as many territories as possible. <br>
                Three points will give you Domination status over a territory. <br>
                Send Spies to check current status. <br>
                Once Dominated, a territory will no longer change possession. <br>


<!-- SELECT team_name FROM `progress` where station_1 = (SELECT max(station_1) FROM progress)         //this works
-->

                </p>
	</div>

        <div class="w3-panel w3-pale-green w3-leftbar w3-rightbar w3-border-green w3-margin-right">
		<p>  Input key: for a root sign, use the letter "v". Exponents use "^". <br>
                No spaces for large numbers. Units are never needed. <br>
                No spaces between comma and number for coordinates <br>
                Simplify all fractions, use "/"          
                
                
                
                </p>
</div>
        
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

 


/*$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

//echo "id: " . $row["id"]. " - TEAM Name: " . $row["team_name"]. " " . $row["VALUE"]. "<br>";
        echo "Station 1: " . $row["station_1"]. " TEAM Name: " . $row["team_name"]. "<br>";
       echo $row[0];
        

    echo mysqli_num_fields($result);

        
        //$out = mysqli_fetch_array($result);
        //print($out[0][0]); // or print($out[0]);
   }
} else {
    echo "0 results";
}



//echo $sql;



$sqltest = "SELECT MAX(station_1) AS TMP FROM progress";
$rs = mysqli_query($conn, $sqltest);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


*/


?>


<button class="accordion">1: Australia</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='check'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1'>
<span> The diagonal of a rectangle is 26 units long. The perimeter is 68 square units. What is the area? 


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






<button class="accordion">Question 2</button>
<div class="panel">

<span> What’s the x-coordinate of the point P on the x-axis such that the distance from P to the origin is the same as the distance from P to the point with coordinates ( - ⅖, ¾). Express answer as common fraction.
    <form>
      
		<div>
            <label for='answer2'>Answer:</label>
            <input type='value' name='answer2' id='answer2' onkeyup='checkPass2(); return false;'><br>
            <span id='confirmMessage2' class='confirmMessage2'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> A triangle with side lengths in the ratio 7:24:25 is inscribed in a circle with radius 25. What is the area of the triangle?


    <form>
      
		<div>
            <label for='answer3'>Answer:</label>
            <input type='value' name='answer3' id='answer3' onkeyup='checkPass3(); return false;'><br>
            <span id='confirmMessage3' class='confirmMessage3'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">2: Ukraine</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks2'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s2'>
<span> There are 2 supplementary angles. One angle is x-15 degrees and one is 2x degrees. What is the value of x in degrees? 


    <form>
    
		<div>
            <label for='answer1s2'>Answer:</label>
            <input type='value' name='answer1s2' id='answer1s2' onkeyup='checkPass1s2(); return false;'><br>
            <span id='confirmMessage1s2' class='confirmMessage1s2'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s2'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes2'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> An empty cone and a cylinder have the same base and height. If the cone (base opening upwards) has water up to half its height, how much will the cylinder be filled when the water is poured from the cone into the cylinder? Express the answer as a fraction.

    <form>
      
		<div>
            <label for='answer2s2'>Answer:</label>
            <input type='value' name='answer2s2' id='answer2s2' onkeyup='checkPass2s2(); return false;'><br>
            <span id='confirmMessage2s2' class='confirmMessage2s2'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s2'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s2'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Calculate the length of x, given that the area of the cross is 64 units, and the side length of the square is 10.<br>
<img src='2c.png' height = '200'>

    <form>
      
		<div>
            <label for='answer3s2'>Answer:</label>
            <input type='value' name='answer3s2' id='answer3s2' onkeyup='checkPass3s2(); return false;'><br>
            <span id='confirmMessage3s2' class='confirmMessage3s2'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s2'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s2'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">3: Mexico</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks3'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s3'>
<span> Triangles XYZ and PQR are drawn on a square grid. What fraction of the area of triangle XYZ is the area of triangle PQR?
<br>
<img src = '3a.png' height = '200'>
    <form>
    
		<div>
            <label for='answer1s3'>Answer:</label>
            <input type='value' name='answer1s3' id='answer1s3' onkeyup='checkPass1s3(); return false;'><br>
            <span id='confirmMessage1s3' class='confirmMessage1s3'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s3'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes3'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> All triangles with perimeter 49 and distinct integer side lengths x,y,z are constructed, how many triangles are there? Note: triangle with x=14, y=15, z=20 and triangle with x=20, y=15, z=14 are considered the same.


    <form>
      
		<div>
            <label for='answer2s3'>Answer:</label>
            <input type='value' name='answer2s3' id='answer2s3' onkeyup='checkPass2s3(); return false;'><br>
            <span id='confirmMessage2s3' class='confirmMessage2s3'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s3'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s3'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> How many ways are there to select 3 dots out of the 17 dots below so that the three dots form the vertices of a triangle?
<br>
<img src = '3c.png' height = '200'>

    <form>
      
		<div>
            <label for='answer3s3'>Answer:</label>
            <input type='value' name='answer3s3' id='answer3s3' onkeyup='checkPass3s3(); return false;'><br>
            <span id='confirmMessage3s3' class='confirmMessage3s3'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s3'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s3'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>


<button class="accordion">4: Britain</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks4'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s4'>
<span> What is the distance between points (2, -17) and (23, 55) on the coordinate grid? 


    <form>
    
		<div>
            <label for='answer1s4'>Answer:</label>
            <input type='value' name='answer1s4' id='answer1s4' onkeyup='checkPass1s4(); return false;'><br>
            <span id='confirmMessage1s4' class='confirmMessage1s4'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s4'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes4'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Rhombus ABCD has side length 2 and ∠B = 120°. Region R consists of all points inside the rhombus that are closer to vertex B than any of the other three vertices. What is the area of R?    


    <form>
      
		<div>
            <label for='answer2s4'>Answer:</label>
            <input type='value' name='answer2s4' id='answer2s4' onkeyup='checkPass2s4(); return false;'><br>
            <span id='confirmMessage2s4' class='confirmMessage2s4'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s4'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s4'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> A king has a piece of land that is adjacent to an acidic river. Suppose he wants to build an 1000-ft long rectangular wall for his subjects. If one side of the wall is the acidic river where no one will not be able to swim away, what is the largest area the wall can surround?


    <form>
      
		<div>
            <label for='answer3s4'>Answer:</label>
            <input type='value' name='answer3s4' id='answer3s4' onkeyup='checkPass3s4(); return false;'><br>
            <span id='confirmMessage3s4' class='confirmMessage3s4'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s4'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s4'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">5: Peru</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks5'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s5'>
<span> A triangle has integer side lengths. The lengths of the three sides of the triangle form an arithmetic sequence and one of the sides has length 10. What is the largest possible length of the longest side?


    <form>
    
		<div>
            <label for='answer1s5'>Answer:</label>
            <input type='value' name='answer1s5' id='answer1s5' onkeyup='checkPass1s5(); return false;'><br>
            <span id='confirmMessage1s5' class='confirmMessage1s5'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s5'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes5'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> All sides of triangle ABC are tangent to the circle. If the area of the triangle is 45.5 and the radius of the circle is 2.6, what is the perimeter of triangle ABC?  
<br>
<img src = '5b.png' height = '200'>

    <form>
      
		<div>
            <label for='answer2s5'>Answer:</label>
            <input type='value' name='answer2s5' id='answer2s5' onkeyup='checkPass2s5(); return false;'><br>
            <span id='confirmMessage2s5' class='confirmMessage2s5'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s5'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s5'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> The overlapping ABC and ABE shared the side AB, ∠EAB and ∠ABC are right angle, AB= 4, BC=6, AE=8 and side AC and BE intersect at D, what is the difference between the area of ADE and BDC.


    <form>
      
		<div>
            <label for='answer3s5'>Answer:</label>
            <input type='value' name='answer3s5' id='answer3s5' onkeyup='checkPass3s5(); return false;'><br>
            <span id='confirmMessage3s5' class='confirmMessage3s5'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s5'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s5'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">6: Senegal</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks6'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s6'>
<span> What is the size of the internal angle of a regular 99-sided polygon? (rounded to one decimal place)


    <form>
    
		<div>
            <label for='answer1s6'>Answer:</label>
            <input type='value' name='answer1s6' id='answer1s6' onkeyup='checkPass1s6(); return false;'><br>
            <span id='confirmMessage1s6' class='confirmMessage1s6'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s6'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes6'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> The keystone arch is composed of the congruent isosceles trapezoids fitted together along the non-parallel sides. The bottom sides of the two end trapezoids are horizontal. In an arch made with 9 trapezoids, let x be the angle measure in degrees of the smaller interior angle of the trapezoid. What is x?    
<br>
<img src = '6b.png' height = '200'>
    <form>
      
		<div>
            <label for='answer2s6'>Answer:</label>
            <input type='value' name='answer2s6' id='answer2s6' onkeyup='checkPass2s6(); return false;'><br>
            <span id='confirmMessage2s6' class='confirmMessage2s6'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s6'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s6'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Bill and Horman run on a circular track. Bill runs counterclockwise and completes a lap every 90 seconds, and Horman runs clockwise and completes a lap every 80 seconds. Both start from the start line at the same time. At some random time between 10 minutes and 11 minutes after they begin to run, a photographer standing inside the track takes a picture that shows one-fourth of the track, centered on the starting line. What is the probability that both Bill and Horman are in the picture?            


    <form>
      
		<div>
            <label for='answer3s6'>Answer:</label>
            <input type='value' name='answer3s6' id='answer3s6' onkeyup='checkPass3s6(); return false;'><br>
            <span id='confirmMessage3s6' class='confirmMessage3s6'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s6'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s6'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">7: Philippines</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks7'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s7'>
<span> Two fair dice are tossed. What is the probability that the lowest common multiple of the two values is 12?


    <form>
    
		<div>
            <label for='answer1s7'>Answer:</label>
            <input type='value' name='answer1s7' id='answer1s7' onkeyup='checkPass1s7(); return false;'><br>
            <span id='confirmMessage1s7' class='confirmMessage1s7'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s7'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes7'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Five people of heights 1.65m, 1.66m, 1.67m, 1.68m, 1.69m stand facing forward in a line. How many orders are there for them to line up, if no person can stand immediately before or after someone who is exactly 1 cm taller or exactly 1 cm shorter than herself? 


    <form>
      
		<div>
            <label for='answer2s7'>Answer:</label>
            <input type='value' name='answer2s7' id='answer2s7' onkeyup='checkPass2s7(); return false;'><br>
            <span id='confirmMessage2s7' class='confirmMessage2s7'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s7'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s7'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Five people are each given a card, 3 of which are red and 2 of which are black. Each person can look at the cards of 3 other people, then guess what their own card is. What is the probability that they all guess correctly, assuming they play optimally? 


    <form>
      
		<div>
            <label for='answer3s7'>Answer:</label>
            <input type='value' name='answer3s7' id='answer3s7' onkeyup='checkPass3s7(); return false;'><br>
            <span id='confirmMessage3s7' class='confirmMessage3s7'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s7'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s7'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>









<button class="accordion">8: Greece</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks8'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s8'>
<span> Twelve fair dice are rolled. What is the probability that the product of the numbers on the top faces is prime? 


    <form>
    
		<div>
            <label for='answer1s8'>Answer:</label>
            <input type='value' name='answer1s8' id='answer1s8' onkeyup='checkPass1s8(); return false;'><br>
            <span id='confirmMessage1s8' class='confirmMessage1s8'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s8'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes8'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Each of 2018 boxes in a line contains a single red marble, and for 1≤ k ≤ 2018, the box in the "k"th position also contains k white marbles. Sean begins at the first box and successively draws a single marble at random from each box, in order. He stops when he first draws a red marble. Let P(n) be the probability that Sean stops after drawing exactly n marble. What is the smallest value for which P(n) is LESS THAN 1/2018?          


    <form>
      
		<div>
            <label for='answer2s8'>Answer:</label>
            <input type='value' name='answer2s8' id='answer2s8' onkeyup='checkPass2s8(); return false;'><br>
            <span id='confirmMessage2s8' class='confirmMessage2s8'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s8'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s8'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Hercules is about to slay three hydras, with each having a different number of heads and tails. Hydra A has 1H and 1T, Hydra B has 2H and 2T, Hydra C has 3H and 3T. Hercules can slice off 1 head, 2 heads, 1 tail, or 2 tails in one stroke. When 1 head is chopped off, 3 grow back, when 2 heads are chopped off, nothing grows back, when 1 tail is cut off, 2 grow back, and the spooky part is when two tails are cut off, 1 head grows back. What is the product of the minimum number of slices required to kill each hydra respectively?


    <form>
      
		<div>
            <label for='answer3s8'>Answer:</label>
            <input type='value' name='answer3s8' id='answer3s8' onkeyup='checkPass3s8(); return false;'><br>
            <span id='confirmMessage3s8' class='confirmMessage3s8'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s8'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s8'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">9: North Korea</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks9'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s9'>
<span> Horman and Bill compete in target shooting. Each one fires a single bullet towards a target. Horman has probability ⅕ of hitting the target and Bill has probability ⅓  of hitting. If both hit or if both miss then neither is a winner. What is the probability that Horman wins? 

    <form>
    
		<div>
            <label for='answer1s9'>Answer:</label>
            <input type='value' name='answer1s9' id='answer1s9' onkeyup='checkPass1s9(); return false;'><br>
            <span id='confirmMessage1s9' class='confirmMessage1s9'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s9'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes9'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Yolanda’s ice cream store is opening! Customers get to try two ice cream flavours: chocolate and vanilla. Yolanda kept a tally of each of the flavours that were tried, but forgot to keep a total tally of all the customers.
<br>Here are the stats:
<br>56 people tried chocolate
<br>73 tried vanilla
<br>23 tried both chocolate and vanilla
<br>How many customers came to the store?


    <form>
      
		<div>
            <label for='answer2s9'>Answer:</label>
            <input type='value' name='answer2s9' id='answer2s9' onkeyup='checkPass2s9(); return false;'><br>
            <span id='confirmMessage2s9' class='confirmMessage2s9'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s9'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s9'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> There are four diplomats at a conference. Between any two people, there is a ½ chance that they are friends. What is the expected number of people who are friendless at the conference? Give your answer as a common fraction.


    <form>
      
		<div>
            <label for='answer3s9'>Answer:</label>
            <input type='value' name='answer3s9' id='answer3s9' onkeyup='checkPass3s9(); return false;'><br>
            <span id='confirmMessage3s9' class='confirmMessage3s9'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s9'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s9'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">10: Brazil</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks10'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s10'>
<span> At a party, everyone shook hands with everybody else. There were 66 handshakes. How many people were at the party?  


    <form>
    
		<div>
            <label for='answer1s10'>Answer:</label>
            <input type='value' name='answer1s10' id='answer1s10' onkeyup='checkPass1s10(); return false;'><br>
            <span id='confirmMessage1s10' class='confirmMessage1s10'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s10'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes10'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> You have the digits 1-9 to make a 3 digit number. If you cannot use a digit twice, how many different numbers can you make?


    <form>
      
		<div>
            <label for='answer2s10'>Answer:</label>
            <input type='value' name='answer2s10' id='answer2s10' onkeyup='checkPass2s10(); return false;'><br>
            <span id='confirmMessage2s10' class='confirmMessage2s10'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s10'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s10'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Six cookies are placed inside 3 boxes at random. What is the probability that one box contains at least twice as many cookies as each of the other two boxes?

    <form>
      
		<div>
            <label for='answer3s10'>Answer:</label>
            <input type='value' name='answer3s10' id='answer3s10' onkeyup='checkPass3s10(); return false;'><br>
            <span id='confirmMessage3s10' class='confirmMessage3s10'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s10'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s10'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">11: India</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks11'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s11'>
<span> A chess set at the Richmond Public Library cost $15.00. If this is the price after a 25% reduction, what was the original price? 


    <form>
    
		<div>
            <label for='answer1s11'>Answer:</label>
            <input type='value' name='answer1s11' id='answer1s11' onkeyup='checkPass1s11(); return false;'><br>
            <span id='confirmMessage1s11' class='confirmMessage1s11'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s11'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes11'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> <img src = '11b.png' height = '200'>

    <form>
      
		<div>
            <label for='answer2s11'>Answer:</label>
            <input type='value' name='answer2s11' id='answer2s11' onkeyup='checkPass2s11(); return false;'><br>
            <span id='confirmMessage2s11' class='confirmMessage2s11'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s11'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s11'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> An arithmetic sequence has the terms 1, n,..., the sum of the first n terms equals 33n. Solve for n.   

    <form>
      
		<div>
            <label for='answer3s11'>Answer:</label>
            <input type='value' name='answer3s11' id='answer3s11' onkeyup='checkPass3s11(); return false;'><br>
            <span id='confirmMessage3s11' class='confirmMessage3s11'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s11'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s11'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">12: Sweden</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks12'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s12'>
<span> Two hoses fill a pool with water. If hose A takes 3 hours to fill the pool and hose B takes 5 hrs, how long will they take if they both fill the pool together? Express the answer as a fraction. 


    <form>
    
		<div>
            <label for='answer1s12'>Answer:</label>
            <input type='value' name='answer1s12' id='answer1s12' onkeyup='checkPass1s12(); return false;'><br>
            <span id='confirmMessage1s12' class='confirmMessage1s12'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s12'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes12'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Some princes and princesses are having a party in a castle. Initially 60% of the group are princesses. Shortly thereafter 6 princesses leave and 6 princes arrive, and then it turns out 80% of the group are princes. How many princesses were initially in the group? 


    <form>
      
		<div>
            <label for='answer2s12'>Answer:</label>
            <input type='value' name='answer2s12' id='answer2s12' onkeyup='checkPass2s12(); return false;'><br>
            <span id='confirmMessage2s12' class='confirmMessage2s12'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s12'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s12'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Sean and Horman run in opposite directions on a circular track, starting at diametrically opposite points. They first meet after Sean has run 1000 meters. They next meet after Horman has run 1500 meters past their first meeting point. Each future olympian runs at a constant speed. What is the length of the track in meters? 

    <form>
      
		<div>
            <label for='answer3s12'>Answer:</label>
            <input type='value' name='answer3s12' id='answer3s12' onkeyup='checkPass3s12(); return false;'><br>
            <span id='confirmMessage3s12' class='confirmMessage3s12'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s12'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s12'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">13: China</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks13'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s13'>
<span> You are going to travel and you decide to buy an ultimate frisbee. The frisbee costs $24.00 before tax (it is very high quality) if the sales tax is 5% and you then pay 5% tip to the person who found the frisbee for you on the after tax price, how much do you pay overall?  


    <form>
    
		<div>
            <label for='answer1s13'>Answer:</label>
            <input type='value' name='answer1s13' id='answer1s13' onkeyup='checkPass1s13(); return false;'><br>
            <span id='confirmMessage1s13' class='confirmMessage1s13'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s13'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes13'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> How many primes can be created using any number of distinct digits from the set of digits S = {1, 3, 5, 6}?  


    <form>
      
		<div>
            <label for='answer2s13'>Answer:</label>
            <input type='value' name='answer2s13' id='answer2s13' onkeyup='checkPass2s13(); return false;'><br>
            <span id='confirmMessage2s13' class='confirmMessage2s13'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s13'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s13'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Decode: (hint: You’ll need wits, guile and even primes) VJG CPUYGT KU PKPG VKOGU VYQ. 


    <form>
      
		<div>
            <label for='answer3s13'>Answer:</label>
            <input type='value' name='answer3s13' id='answer3s13' onkeyup='checkPass3s13(); return false;'><br>
            <span id='confirmMessage3s13' class='confirmMessage3s13'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s13'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s13'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">14: Canada</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks14'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s14'>
<span> A large jar of antique maple syrup costs $54.00 Canadian dollars. If this is the price after a 28% sale for Canada Day, what was the original price?  


    <form>
    
		<div>
            <label for='answer1s14'>Answer:</label>
            <input type='value' name='answer1s14' id='answer1s14' onkeyup='checkPass1s14(); return false;'><br>
            <span id='confirmMessage1s14' class='confirmMessage1s14'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s14'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes14'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Wendy has a number of gemstones, each of a different weight. She gave Angela the lightest 18 stones, which consisted of 35% of the weight. She gave Kate the heaviest 19 stones, which consisted of 40% of the weight. She then gave Ally the remaining gemstones. How many gemstones did Ally get?


    <form>
      
		<div>
            <label for='answer2s14'>Answer:</label>
            <input type='value' name='answer2s14' id='answer2s14' onkeyup='checkPass2s14(); return false;'><br>
            <span id='confirmMessage2s14' class='confirmMessage2s14'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s14'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s14'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Because you were hungry, you bought 1584 burgers from Tim Hortons. However when you looked at the receipt, you realized some of the numbers were smudged off. All you see is $_ _17.1_ . Determine what the total cost of all the burgers was?

    <form>
      
		<div>
            <label for='answer3s14'>Answer:</label>
            <input type='value' name='answer3s14' id='answer3s14' onkeyup='checkPass3s14(); return false;'><br>
            <span id='confirmMessage3s14' class='confirmMessage3s14'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s14'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s14'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">15: Jamaica</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks15'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s15'>
<span> Ryan ran one lap of a 400m track at 5 km/h. How fast, in km/h, must he run the second lap to get an overall average speed of 9 km/h from both laps? 


    <form>
    
		<div>
            <label for='answer1s15'>Answer:</label>
            <input type='value' name='answer1s15' id='answer1s15' onkeyup='checkPass1s15(); return false;'><br>
            <span id='confirmMessage1s15' class='confirmMessage1s15'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s15'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes15'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> If wxyz is a four-digit number, the layer sum of the number is wxyz+xyz+yz+z  (eg. 4089+089+89+9=4276) If the layer sum of a number is 2664, what is the four-digit number?


    <form>
      
		<div>
            <label for='answer2s15'>Answer:</label>
            <input type='value' name='answer2s15' id='answer2s15' onkeyup='checkPass2s15(); return false;'><br>
            <span id='confirmMessage2s15' class='confirmMessage2s15'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s15'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s15'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> ABCDE * 4 = EDCBA. With each letter representing a different digit. What number does ABCDE represent? 

    <form>
      
		<div>
            <label for='answer3s15'>Answer:</label>
            <input type='value' name='answer3s15' id='answer3s15' onkeyup='checkPass3s15(); return false;'><br>
            <span id='confirmMessage3s15' class='confirmMessage3s15'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s15'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s15'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">16: New Zealand</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks16'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s16'>
<span> One day, a person went to a horse racing area. Instead of counting the number of humans and horses, he counted 74 heads and 196 legs. How many humans and horses were there? Express answer as (#horses,#humans) 


    <form>
    
		<div>
            <label for='answer1s16'>Answer:</label>
            <input type='value' name='answer1s16' id='answer1s16' onkeyup='checkPass1s16(); return false;'><br>
            <span id='confirmMessage1s16' class='confirmMessage1s16'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s16'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes16'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> When a can is two-thirds full of ice tea, the can and the ice tea weigh a grams. When the can is one-half full of ice tea the total weight is b grams. What is the total weight in terms of a and b in grams when the can is filled with ice tea? 


    <form>
      
		<div>
            <label for='answer2s16'>Answer:</label>
            <input type='value' name='answer2s16' id='answer2s16' onkeyup='checkPass2s16(); return false;'><br>
            <span id='confirmMessage2s16' class='confirmMessage2s16'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s16'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s16'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Before receiving math help, 30% of the students answered “Yes” to the question “Do you enjoy math?” while 70% answered “No”. After receiving math help for a semester, 90% of the students answer “Yes” to the same question while 10% answer “No”. Altogether, x% of the students gave a different answer after the semester compare to at the beginning of the semester. What is the difference between the maximum and minimum possible values of x?


    <form>
      
		<div>
            <label for='answer3s16'>Answer:</label>
            <input type='value' name='answer3s16' id='answer3s16' onkeyup='checkPass3s16(); return false;'><br>
            <span id='confirmMessage3s16' class='confirmMessage3s16'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s16'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s16'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">17: Madagascar</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks17'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s17'>
<span> What is the smallest whole number N such that N x 280 is a perfect square?


    <form>
    
		<div>
            <label for='answer1s17'>Answer:</label>
            <input type='value' name='answer1s17' id='answer1s17' onkeyup='checkPass1s17(); return false;'><br>
            <span id='confirmMessage1s17' class='confirmMessage1s17'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s17'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes17'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> Given that a number N has 6 factors, what is the minimum possible number of factors of 6N?


    <form>
      
		<div>
            <label for='answer2s17'>Answer:</label>
            <input type='value' name='answer2s17' id='answer2s17' onkeyup='checkPass2s17(); return false;'><br>
            <span id='confirmMessage2s17' class='confirmMessage2s17'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s17'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s17'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> Given a positive integer N, define f(N) to be the number of digits in the binary representation of N. What is the value of f(1) - f(2) + f(3) - f(4) + … -f(2018)?
    <form>
      
		<div>
            <label for='answer3s17'>Answer:</label>
            <input type='value' name='answer3s17' id='answer3s17' onkeyup='checkPass3s17(); return false;'><br>
            <span id='confirmMessage3s17' class='confirmMessage3s17'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s17'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s17'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">18: Saudi Arabia</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks18'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s18'>
<span> What is the square root of 3 to the power of square root of 2 times the square root of 3 to the power of negative square root of 2 ?


    <form>
    
		<div>
            <label for='answer1s18'>Answer:</label>
            <input type='value' name='answer1s18' id='answer1s18' onkeyup='checkPass1s18(); return false;'><br>
            <span id='confirmMessage1s18' class='confirmMessage1s18'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s18'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes18'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> <img src = '18b.png' height = '200'>

    <form>
      
		<div>
            <label for='answer2s18'>Answer:</label>
            <input type='value' name='answer2s18' id='answer2s18' onkeyup='checkPass2s18(); return false;'><br>
            <span id='confirmMessage2s18' class='confirmMessage2s18'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s18'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s18'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> <img src = '18c.png' height = '200'>

    <form>
      
		<div>
            <label for='answer3s18'>Answer:</label>
            <input type='value' name='answer3s18' id='answer3s18' onkeyup='checkPass3s18(); return false;'><br>
            <span id='confirmMessage3s18' class='confirmMessage3s18'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s18'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s18'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>




<button class="accordion">19: United States</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks19'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s19'>
<span> In the land of Dearth, we have two temperature scales: Felsius and Cahrenheit. If one Felsius is 4.4 x Cahrenheit + 17, at what temperature are the two scales equal? 


    <form>
    
		<div>
            <label for='answer1s19'>Answer:</label>
            <input type='value' name='answer1s19' id='answer1s19' onkeyup='checkPass1s19(); return false;'><br>
            <span id='confirmMessage1s19' class='confirmMessage1s19'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s19'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes19'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> If x^234=27, what is the value of x^390?


    <form>
      
		<div>
            <label for='answer2s19'>Answer:</label>
            <input type='value' name='answer2s19' id='answer2s19' onkeyup='checkPass2s19(); return false;'><br>
            <span id='confirmMessage2s19' class='confirmMessage2s19'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s19'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s19'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> The average of the numbers 1,2,3,4,5…..,2017 and x is 2018x. What is x?


    <form>
      
		<div>
            <label for='answer3s19'>Answer:</label>
            <input type='value' name='answer3s19' id='answer3s19' onkeyup='checkPass3s19(); return false;'><br>
            <span id='confirmMessage3s19' class='confirmMessage3s19'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s19'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s19'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<button class="accordion">20: Russia</button>
<div class="panel">

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Send spy" name='checks20'>
</form>
<br>
<button class="accordion">Question 1</button>
<div class="panel">
  

<div id= 'tag1s20'>
<span> Two positive numbers that differ by 4 have a product of 621. What is the larger of the two numbers?


    <form>
    
		<div>
            <label for='answer1s20'>Answer:</label>
            <input type='value' name='answer1s20' id='answer1s20' onkeyup='checkPass1s20(); return false;'><br>
            <span id='confirmMessage1s20' class='confirmMessage1s20'></span>
        </div>
        
    </form>
</span>
</div>
<br>


<div id= 'tag2s20'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Attack" name='takes20'>
</form>
<br>






<button class="accordion">Question 2</button>
<div class="panel">

<span> <img src = '20b.png' height = '200'>

    <form>
      
		<div>
            <label for='answer2s20'>Answer:</label>
            <input type='value' name='answer2s20' id='answer2s20' onkeyup='checkPass2s20(); return false;'><br>
            <span id='confirmMessage2s20' class='confirmMessage2s20'></span>
        </div>

    </form>
</span>

<br>


<div id= 'tag3s20'>
<form action="" onsubmit="" method="post" target= "bait">
<input class="submit" type="submit" value="Invade" name='take2s20'>
</form>
<br>




<button class="accordion">Question 3</button>
<div class="panel">

<span> <img src = '20c.png' height = '200'>

    <form>
      
		<div>
            <label for='answer3s20'>Answer:</label>
            <input type='value' name='answer3s20' id='answer3s20' onkeyup='checkPass3s20(); return false;'><br>
            <span id='confirmMessage3s20' class='confirmMessage3s20'></span>
        </div>

    </form>
</span>

</div></div>

<br>

<div id= 'tag4s20'>

<form action="" onsubmit="" method="post" target="bait">
<input class="submit" type="submit" value="Take over" name='take3s20'>
</form>

<br>

</div>
</div>
</div>
</div>
</div>



<iframe name="bait" style="display:none;"></iframe>



<!-- JS stuff is down here -->

<script>
// at this point, i trust you to know how to troubleshoot this. if it aint broke dont go fixin it
window.addEventListener('keydown',function(e){if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){if(e.target.nodeName=='INPUT'&&e.target.type=='text'){e.preventDefault();return false;}}},true);

    
    
function status() {
}



function stealth() {
 
	var tag2 = document.getElementById('tag2');
	var tag3 = document.getElementById('tag3');
	var tag4 = document.getElementById('tag4');
        var tag2s2 = document.getElementById('tag2s2');
	var tag3s2 = document.getElementById('tag3s2');
	var tag4s2 = document.getElementById('tag4s2');
        var tag2s3 = document.getElementById('tag2s3');
	var tag3s3 = document.getElementById('tag3s3');
	var tag4s3 = document.getElementById('tag4s3');
        var tag2s4 = document.getElementById('tag2s4');
	var tag3s4 = document.getElementById('tag3s4');
	var tag4s4 = document.getElementById('tag4s4');


	

	
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
	
        
        if (tag2s2.style.display === 'none') {
        tag2s2.style.display = 'block';
    } else {
        tag2s2.style.display = 'none';
    }
	if (tag3s2.style.display === 'none') {
        tag3s2.style.display = 'block';
    } else {
        tag3s2.style.display = 'none';
    }
	if (tag4s2.style.display === 'none') {
        tag4s2.style.display = 'block';
    } else {
        tag4s2.style.display = 'none';
    }
    
    
    
    if (tag2s3.style.display === 'none') {
        tag2s3.style.display = 'block';
    } else {
        tag2s3.style.display = 'none';
    }
	if (tag3s3.style.display === 'none') {
        tag3s3.style.display = 'block';
    } else {
        tag3s3.style.display = 'none';
    }
	if (tag4s3.style.display === 'none') {
        tag4s3.style.display = 'block';
    } else {
        tag4s3.style.display = 'none';
    }
    
    
    
    if (tag2s4.style.display === 'none') {
        tag2s4.style.display = 'block';
    } else {
        tag2s4.style.display = 'none';
    }
	if (tag3s4.style.display === 'none') {
        tag3s4.style.display = 'block';
    } else {
        tag3s4.style.display = 'none';
    }
	if (tag4s4.style.display === 'none') {
        tag4s4.style.display = 'block';
    } else {
        tag4s4.style.display = 'none';
    }
    
    
    
    if (tag2s5.style.display === 'none') {
        tag2s5.style.display = 'block';
    } else {
        tag2s5.style.display = 'none';
    }
	if (tag3s5.style.display === 'none') {
        tag3s5.style.display = 'block';
    } else {
        tag3s5.style.display = 'none';
    }
	if (tag4s5.style.display === 'none') {
        tag4s5.style.display = 'block';
    } else {
        tag4s5.style.display = 'none';
    }
    
    
    
    if (tag2s6.style.display === 'none') {
        tag2s6.style.display = 'block';
    } else {
        tag2s6.style.display = 'none';
    }
	if (tag3s6.style.display === 'none') {
        tag3s6.style.display = 'block';
    } else {
        tag3s6.style.display = 'none';
    }
	if (tag4s6.style.display === 'none') {
        tag4s6.style.display = 'block';
    } else {
        tag4s6.style.display = 'none';
    }
    
    
    
    if (tag2s7.style.display === 'none') {
        tag2s7.style.display = 'block';
    } else {
        tag2s7.style.display = 'none';
    }
	if (tag3s7.style.display === 'none') {
        tag3s7.style.display = 'block';
    } else {
        tag3s7.style.display = 'none';
    }
	if (tag4s7.style.display === 'none') {
        tag4s7.style.display = 'block';
    } else {
        tag4s7.style.display = 'none';
    }
    
    
    
    if (tag2s8.style.display === 'none') {
        tag2s8.style.display = 'block';
    } else {
        tag2s8.style.display = 'none';
    }
	if (tag3s8.style.display === 'none') {
        tag3s8.style.display = 'block';
    } else {
        tag3s8.style.display = 'none';
    }
	if (tag4s8.style.display === 'none') {
        tag4s8.style.display = 'block';
    } else {
        tag4s8.style.display = 'none';
    }
    
    
    
    if (tag2s9.style.display === 'none') {
        tag2s9.style.display = 'block';
    } else {
        tag2s9.style.display = 'none';
    }
	if (tag3s9.style.display === 'none') {
        tag3s9.style.display = 'block';
    } else {
        tag3s9.style.display = 'none';
    }
	if (tag4s9.style.display === 'none') {
        tag4s9.style.display = 'block';
    } else {
        tag4s9.style.display = 'none';
    }
    
    
    
    if (tag2s10.style.display === 'none') {
        tag2s10.style.display = 'block';
    } else {
        tag2s10.style.display = 'none';
    }
	if (tag3s10.style.display === 'none') {
        tag3s10.style.display = 'block';
    } else {
        tag3s10.style.display = 'none';
    }
	if (tag4s10.style.display === 'none') {
        tag4s10.style.display = 'block';
    } else {
        tag4s10.style.display = 'none';
    }
    
    
    
    if (tag2s11.style.display === 'none') {
        tag2s11.style.display = 'block';
    } else {
        tag2s11.style.display = 'none';
    }
	if (tag3s11.style.display === 'none') {
        tag3s11.style.display = 'block';
    } else {
        tag3s11.style.display = 'none';
    }
	if (tag4s11.style.display === 'none') {
        tag4s11.style.display = 'block';
    } else {
        tag4s11.style.display = 'none';
    }
    
    
    
    if (tag2s12.style.display === 'none') {
        tag2s12.style.display = 'block';
    } else {
        tag2s12.style.display = 'none';
    }
	if (tag3s12.style.display === 'none') {
        tag3s12.style.display = 'block';
    } else {
        tag3s12.style.display = 'none';
    }
	if (tag4s12.style.display === 'none') {
        tag4s12.style.display = 'block';
    } else {
        tag4s12.style.display = 'none';
    }
    
    
    
    if (tag2s13.style.display === 'none') {
        tag2s13.style.display = 'block';
    } else {
        tag2s13.style.display = 'none';
    }
	if (tag3s13.style.display === 'none') {
        tag3s13.style.display = 'block';
    } else {
        tag3s13.style.display = 'none';
    }
	if (tag4s13.style.display === 'none') {
        tag4s13.style.display = 'block';
    } else {
        tag4s13.style.display = 'none';
    }
    
    
    if (tag2s14.style.display === 'none') {
        tag2s14.style.display = 'block';
    } else {
        tag2s14.style.display = 'none';
    }
	if (tag3s14.style.display === 'none') {
        tag3s14.style.display = 'block';
    } else {
        tag3s14.style.display = 'none';
    }
	if (tag4s14.style.display === 'none') {
        tag4s14.style.display = 'block';
    } else {
        tag4s14.style.display = 'none';
    }
    
    
    if (tag2s15.style.display === 'none') {
        tag2s15.style.display = 'block';
    } else {
        tag2s15.style.display = 'none';
    }
	if (tag3s15.style.display === 'none') {
        tag3s15.style.display = 'block';
    } else {
        tag3s15.style.display = 'none';
    }
	if (tag4s15.style.display === 'none') {
        tag4s15.style.display = 'block';
    } else {
        tag4s15.style.display = 'none';
    }
    
    
    if (tag2s16.style.display === 'none') {
        tag2s16.style.display = 'block';
    } else {
        tag2s16.style.display = 'none';
    }
	if (tag3s16.style.display === 'none') {
        tag3s16.style.display = 'block';
    } else {
        tag3s16.style.display = 'none';
    }
	if (tag4s16.style.display === 'none') {
        tag4s16.style.display = 'block';
    } else {
        tag4s16.style.display = 'none';
    }
    
    
    if (tag2s17.style.display === 'none') {
        tag2s17.style.display = 'block';
    } else {
        tag2s17.style.display = 'none';
    }
	if (tag3s17.style.display === 'none') {
        tag3s17.style.display = 'block';
    } else {
        tag3s17.style.display = 'none';
    }
	if (tag4s17.style.display === 'none') {
        tag4s17.style.display = 'block';
    } else {
        tag4s17.style.display = 'none';
    }
    
    
    if (tag2s18.style.display === 'none') {
        tag2s18.style.display = 'block';
    } else {
        tag2s18.style.display = 'none';
    }
	if (tag3s18.style.display === 'none') {
        tag3s18.style.display = 'block';
    } else {
        tag3s18.style.display = 'none';
    }
	if (tag4s18.style.display === 'none') {
        tag4s18.style.display = 'block';
    } else {
        tag4s18.style.display = 'none';
    }
    
    
    if (tag2s19.style.display === 'none') {
        tag2s19.style.display = 'block';
    } else {
        tag2s19.style.display = 'none';
    }
	if (tag3s19.style.display === 'none') {
        tag3s19.style.display = 'block';
    } else {
        tag3s19.style.display = 'none';
    }
	if (tag4s19.style.display === 'none') {
        tag4s19.style.display = 'block';
    } else {
        tag4s19.style.display = 'none';
    }
    
    
    if (tag2s20.style.display === 'none') {
        tag2s20.style.display = 'block';
    } else {
        tag2s20.style.display = 'none';
    }
	if (tag3s20.style.display === 'none') {
        tag3s20.style.display = 'block';
    } else {
        tag3s20.style.display = 'none';
    }
	if (tag4s20.style.display === 'none') {
        tag4s20.style.display = 'block';
    } else {
        tag4s20.style.display = 'none';
    }
    
    
    
        
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

function checkPass1()
{
    var message1 = document.getElementById('confirmMessage1');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1.value == '240'){
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
    
	if(answer2.value == '-289/320'){
		tag3.style.display = 'block';
		answer2.style.backgroundColor = goodColor;
		message2.style.color = goodColor;
        message2.innerHTML = 'That is correct!'
	}
	else{
		answer2.style.backgroundColor = badColor;
		message2style.color = badColor;
        message2.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3()
{
    var message3 = document.getElementById('confirmMessage3');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3.value == '336'){
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


function checkPass1s2()
{
    var message1s2 = document.getElementById('confirmMessage1s2');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s2.value == '65'){
		tag2s2.style.display = 'block';
		answer1s2.style.backgroundColor = goodColor;
		message1s2.style.color = goodColor;
        message1s2.innerHTML = 'That is correct!'		
	}
	else{
		answer1s2.style.backgroundColor = badColor;
		}
}  

function checkPass2s2()
{
    var message2s2 = document.getElementById('confirmMessage2s2');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s2.value == '1/24'){
		tag3s2.style.display = 'block';
		answer2s2.style.backgroundColor = goodColor;
		message2s2.style.color = goodColor;
        message2s2.innerHTML = 'That is correct!'
	}
	else{
		answer2s2.style.backgroundColor = badColor;
		message2s2.style.color = badColor;
        message2s2.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s2()
{
    var message3s2 = document.getElementById('confirmMessage3s2');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s2.value == '2v2'){
		tag4s2.style.display = 'block';
		answer3s2.style.backgroundColor = goodColor;
		message3s2.style.color = goodColor;
        message3s2.innerHTML = 'That is correct!'
	}
	else{
		answer3s2.style.backgroundColor = badColor;
		message3s2.style.color = badColor;
        message3s2.innerHTML = 'Incorrect. Please try again.'
		}
}  


function checkPass1s3()
{
    var message1s3 = document.getElementById('confirmMessage1s3');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s3.value == '1/3'){
		tag2s3.style.display = 'block';
		answer1s3.style.backgroundColor = goodColor;
		message1s3.style.color = goodColor;
        message1s3.innerHTML = 'That is correct!'		
	}
	else{
		answer1s3.style.backgroundColor = badColor;
		}
}  

function checkPass2s3()
{
    var message2s3 = document.getElementById('confirmMessage2s3');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s3.value == '44'){
		tag3s3.style.display = 'block';
		answer2s3.style.backgroundColor = goodColor;
		message2s3.style.color = goodColor;
        message2s3.innerHTML = 'That is correct!'
	}
	else{
		answer2s3.style.backgroundColor = badColor;
		message2s3.style.color = badColor;
        message2s3.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s3()
{
    var message3s3 = document.getElementById('confirmMessage3s3');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s3.value == '618'){
		tag4s3.style.display = 'block';
		answer3s3.style.backgroundColor = goodColor;
		message3s3.style.color = goodColor;
        message3s3.innerHTML = 'That is correct!'
	}
	else{
		answer3s3.style.backgroundColor = badColor;
		message3s3.style.color = badColor;
        message3s3.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s4()
{
    var message1s4 = document.getElementById('confirmMessage1s4');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s4.value == '75'){
		tag2s4.style.display = 'block';
		answer1s4.style.backgroundColor = goodColor;
		message1s4.style.color = goodColor;
        message1s4.innerHTML = 'That is correct!'		
	}
	else{
		answer1s4.style.backgroundColor = badColor;
		}
}  

function checkPass2s4()
{
    var message2s4 = document.getElementById('confirmMessage2s4');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s4.value == '2v3/3'){
		tag3s4.style.display = 'block';
		answer2s4.style.backgroundColor = goodColor;
		message2s4.style.color = goodColor;
        message2s4.innerHTML = 'That is correct!'
	}
	else{
		answer2s4.style.backgroundColor = badColor;
		message2s4.style.color = badColor;
        message2s4.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s4()
{
    var message3s4 = document.getElementById('confirmMessage3s4');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s4.value == '125000'){
		tag4s4.style.display = 'block';
		answer3s4.style.backgroundColor = goodColor;
		message3s4.style.color = goodColor;
        message3s4.innerHTML = 'That is correct!'
	}
	else{
		answer3s4.style.backgroundColor = badColor;
		message3s4.style.color = badColor;
        message3s4.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s5()
{
    var message1s5 = document.getElementById('confirmMessage1s5');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s5.value == '28'){
		tag2s5.style.display = 'block';
		answer1s5.style.backgroundColor = goodColor;
		message1s5.style.color = goodColor;
        message1s5.innerHTML = 'That is correct!'		
	}
	else{
		answer1s5.style.backgroundColor = badColor;
		}
}  

function checkPass2s5()
{
    var message2s5 = document.getElementById('confirmMessage2s5');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s5.value == '35'){
		tag3s5.style.display = 'block';
		answer2s5.style.backgroundColor = goodColor;
		message2s5.style.color = goodColor;
        message2s5.innerHTML = 'That is correct!'
	}
	else{
		answer2s5.style.backgroundColor = badColor;
		message2s5.style.color = badColor;
        message2s5.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s5()
{
    var message3s5 = document.getElementById('confirmMessage3s5');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s5.value == '4'){
		tag4s5.style.display = 'block';
		answer3s5.style.backgroundColor = goodColor;
		message3s5.style.color = goodColor;
        message3s5.innerHTML = 'That is correct!'
	}
	else{
		answer3s5.style.backgroundColor = badColor;
		message3s5.style.color = badColor;
        message3s5.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s6()
{
    var message1s6 = document.getElementById('confirmMessage1s6');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s6.value == '176.4'){
		tag2s6.style.display = 'block';
		answer1s6.style.backgroundColor = goodColor;
		message1s6.style.color = goodColor;
        message1s6.innerHTML = 'That is correct!'		
	}
	else{
		answer1s6.style.backgroundColor = badColor;
		}
}  

function checkPass2s6()
{
    var message2s6 = document.getElementById('confirmMessage2s6');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s6.value == '80'){
		tag3s6.style.display = 'block';
		answer2s6.style.backgroundColor = goodColor;
		message2s6.style.color = goodColor;
        message2s6.innerHTML = 'That is correct!'
	}
	else{
		answer2s6.style.backgroundColor = badColor;
		message2s6.style.color = badColor;
        message2s6.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s6()
{
    var message3s6 = document.getElementById('confirmMessage3s6');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s6.value == '3/16'){
		tag4s6.style.display = 'block';
		answer3s6.style.backgroundColor = goodColor;
		message3s6.style.color = goodColor;
        message3s6.innerHTML = 'That is correct!'
	}
	else{
		answer3s6.style.backgroundColor = badColor;
		message3s6.style.color = badColor;
        message3s6.innerHTML = 'Incorrect. Please try again.'
		}
}  




function checkPass1s7()
{
    var message1s7 = document.getElementById('confirmMessage1s7');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s7.value == '1/9'){
		tag2s7.style.display = 'block';
		answer1s7.style.backgroundColor = goodColor;
		message1s7.style.color = goodColor;
        message1s7.innerHTML = 'That is correct!'		
	}
	else{
		answer1s7.style.backgroundColor = badColor;
		}
}  

function checkPass2s7()
{
    var message2s7 = document.getElementById('confirmMessage2s7');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s7.value == '14'){
		tag3s7.style.display = 'block';
		answer2s7.style.backgroundColor = goodColor;
		message2s7.style.color = goodColor;
        message2s7.innerHTML = 'That is correct!'
	}
	else{
		answer2s7.style.backgroundColor = badColor;
		message2s7.style.color = badColor;
        message2s7.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s7()
{
    var message3s7 = document.getElementById('confirmMessage3s7');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s7.value == '675/4096'){
		tag4s7.style.display = 'block';
		answer3s7.style.backgroundColor = goodColor;
		message3s7.style.color = goodColor;
        message3s7.innerHTML = 'That is correct!'
	}
	else{
		answer3s7.style.backgroundColor = badColor;
		message3s7.style.color = badColor;
        message3s7.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s8()
{
    var message1s8 = document.getElementById('confirmMessage1s8');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s8.value == '1/6^10'){
		tag2s8.style.display = 'block';
		answer1s8.style.backgroundColor = goodColor;
		message1s8.style.color = goodColor;
        message1s8.innerHTML = 'That is correct!'		
	}
	else{
		answer1s8.style.backgroundColor = badColor;
		}
}  

function checkPass2s8()
{
    var message2s8 = document.getElementById('confirmMessage2s8');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s8.value == '45'){
		tag3s8.style.display = 'block';
		answer2s8.style.backgroundColor = goodColor;
		message2s8.style.color = goodColor;
        message2s8.innerHTML = 'That is correct!'
	}
	else{
		answer2s8.style.backgroundColor = badColor;
		message2s8.style.color = badColor;
        message2s8.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s8()
{
    var message3s8 = document.getElementById('confirmMessage3s8');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s8.value == '162'){
		tag4s8.style.display = 'block';
		answer3s8.style.backgroundColor = goodColor;
		message3s8.style.color = goodColor;
        message3s8.innerHTML = 'That is correct!'
	}
	else{
		answer3s8.style.backgroundColor = badColor;
		message3s8.style.color = badColor;
        message3s8.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s9()
{
    var message1s9 = document.getElementById('confirmMessage1s9');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s9.value == '2/15'){
		tag2s9.style.display = 'block';
		answer1s9.style.backgroundColor = goodColor;
		message1s9.style.color = goodColor;
        message1s9.innerHTML = 'That is correct!'		
	}
	else{
		answer1s9.style.backgroundColor = badColor;
		}
}  

function checkPass2s9()
{
    var message2s9 = document.getElementById('confirmMessage2s9');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s9.value == '151'){
		tag3s9.style.display = 'block';
		answer2s9.style.backgroundColor = goodColor;
		message2s9.style.color = goodColor;
        message2s9.innerHTML = 'That is correct!'
	}
	else{
		answer2s9.style.backgroundColor = badColor;
		message2s9.style.color = badColor;
        message2s9.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s9()
{
    var message3s9 = document.getElementById('confirmMessage3s9');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s9.value == '1/2'){
		tag4s9.style.display = 'block';
		answer3s9.style.backgroundColor = goodColor;
		message3s9.style.color = goodColor;
        message3s9.innerHTML = 'That is correct!'
	}
	else{
		answer3s9.style.backgroundColor = badColor;
		message3s9.style.color = badColor;
        message3s9.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s10()
{
    var message1s10 = document.getElementById('confirmMessage1s10');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s10.value == '12'){
		tag2s10.style.display = 'block';
		answer1s10.style.backgroundColor = goodColor;
		message1s10.style.color = goodColor;
        message1s10.innerHTML = 'That is correct!'		
	}
	else{
		answer1s10.style.backgroundColor = badColor;
		}
}  

function checkPass2s10()
{
    var message2s10 = document.getElementById('confirmMessage2s10');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s10.value == '504'){
		tag3s10.style.display = 'block';
		answer2s10.style.backgroundColor = goodColor;
		message2s10.style.color = goodColor;
        message2s10.innerHTML = 'That is correct!'
	}
	else{
		answer2s10.style.backgroundColor = badColor;
		message2s10.style.color = badColor;
        message2s10.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s10()
{
    var message3s10 = document.getElementById('confirmMessage3s10');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s10.value == '83/243'){
		tag4s10.style.display = 'block';
		answer3s10.style.backgroundColor = goodColor;
		message3s10.style.color = goodColor;
        message3s10.innerHTML = 'That is correct!'
	}
	else{
		answer3s10.style.backgroundColor = badColor;
		message3s10.style.color = badColor;
        message3s10.innerHTML = 'Incorrect. Please try again.'
		}
}



function checkPass1s11()
{
    var message1s11 = document.getElementById('confirmMessage1s11');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s11.value == '20'){
		tag2s11.style.display = 'block';
		answer1s11.style.backgroundColor = goodColor;
		message1s11.style.color = goodColor;
        message1s11.innerHTML = 'That is correct!'		
	}
	else{
		answer1s11.style.backgroundColor = badColor;
		}
}  

function checkPass2s11()
{
    var message2s11 = document.getElementById('confirmMessage2s11');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s11.value == '151'){
		tag3s11.style.display = 'block';
		answer2s11.style.backgroundColor = goodColor;
		message2s11.style.color = goodColor;
        message2s11.innerHTML = 'That is correct!'
	}
	else{
		answer2s11.style.backgroundColor = badColor;
		message2s11.style.color = badColor;
        message2s11.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s11()
{
    var message3s11 = document.getElementById('confirmMessage3s11');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s11.value == '9'){
		tag4s11.style.display = 'block';
		answer3s11.style.backgroundColor = goodColor;
		message3s11.style.color = goodColor;
        message3s11.innerHTML = 'That is correct!'
	}
	else{
		answer3s11.style.backgroundColor = badColor;
		message3s11.style.color = badColor;
        message3s11.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s12()
{
    var message1s12 = document.getElementById('confirmMessage1s12');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s12.value == '15/8'){
		tag2s12.style.display = 'block';
		answer1s12.style.backgroundColor = goodColor;
		message1s12.style.color = goodColor;
        message1s12.innerHTML = 'That is correct!'		
	}
	else{
		answer1s12.style.backgroundColor = badColor;
		}
}  

function checkPass2s12()
{
    var message2s12 = document.getElementById('confirmMessage2s12');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s12.value == '9'){
		tag3s12.style.display = 'block';
		answer2s12.style.backgroundColor = goodColor;
		message2s12.style.color = goodColor;
        message2s12.innerHTML = 'That is correct!'
	}
	else{
		answer2s12.style.backgroundColor = badColor;
		message2s12.style.color = badColor;
        message2s12.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s12()
{
    var message3s12 = document.getElementById('confirmMessage3s12');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s12.value == '3500'){
		tag4s12.style.display = 'block';
		answer3s12.style.backgroundColor = goodColor;
		message3s12.style.color = goodColor;
        message3s12.innerHTML = 'That is correct!'
	}
	else{
		answer3s12.style.backgroundColor = badColor;
		message3s12.style.color = badColor;
        message3s12.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s13()
{
    var message1s13 = document.getElementById('confirmMessage1s13');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s13.value == '26.46'){
		tag2s13.style.display = 'block';
		answer1s13.style.backgroundColor = goodColor;
		message1s13.style.color = goodColor;
        message1s13.innerHTML = 'That is correct!'		
	}
	else{
		answer1s13.style.backgroundColor = badColor;
		}
}  

function checkPass2s13()
{
    var message2s13 = document.getElementById('confirmMessage2s13');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s13.value == '10'){
		tag3s13.style.display = 'block';
		answer2s13.style.backgroundColor = goodColor;
		message2s13.style.color = goodColor;
        message2s13.innerHTML = 'That is correct!'
	}
	else{
		answer2s13.style.backgroundColor = badColor;
		message2s13.style.color = badColor;
        message2s13.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s13()
{
    var message3s13 = document.getElementById('confirmMessage3s13');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s13.value == '18'){
		tag4s13.style.display = 'block';
		answer3s13.style.backgroundColor = goodColor;
		message3s13.style.color = goodColor;
        message3s13.innerHTML = 'That is correct!'
	}
	else{
		answer3s13.style.backgroundColor = badColor;
		message3s13.style.color = badColor;
        message3s13.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s14()
{
    var message1s14 = document.getElementById('confirmMessage1s14');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s14.value == '75'){
		tag2s14.style.display = 'block';
		answer1s14.style.backgroundColor = goodColor;
		message1s14.style.color = goodColor;
        message1s14.innerHTML = 'That is correct!'		
	}
	else{
		answer1s14.style.backgroundColor = badColor;
		}
}  

function checkPass2s14()
{
    var message2s14 = document.getElementById('confirmMessage2s14');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s14.value == '12'){
		tag3s14.style.display = 'block';
		answer2s14.style.backgroundColor = goodColor;
		message2s14.style.color = goodColor;
        message2s14.innerHTML = 'That is correct!'
	}
	else{
		answer2s14.style.backgroundColor = badColor;
		message2s14.style.color = badColor;
        message2s14.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s14()
{
    var message3s14 = document.getElementById('confirmMessage3s14');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s14.value == '7017.12'){
		tag4s14.style.display = 'block';
		answer3s14.style.backgroundColor = goodColor;
		message3s14.style.color = goodColor;
        message3s14.innerHTML = 'That is correct!'
	}
	else{
		answer3s14.style.backgroundColor = badColor;
		message3s14.style.color = badColor;
        message3s14.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s15()
{
    var message1s15 = document.getElementById('confirmMessage1s15');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s15.value == '45'){
		tag2s15.style.display = 'block';
		answer1s15.style.backgroundColor = goodColor;
		message1s15.style.color = goodColor;
        message1s15.innerHTML = 'That is correct!'		
	}
	else{
		answer1s15.style.backgroundColor = badColor;
		}
}  

function checkPass2s15()
{
    var message2s15 = document.getElementById('confirmMessage2s15');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s15.value == '2321'){
		tag3s15.style.display = 'block';
		answer2s15.style.backgroundColor = goodColor;
		message2s15.style.color = goodColor;
        message2s15.innerHTML = 'That is correct!'
	}
	else{
		answer2s15.style.backgroundColor = badColor;
		message2s15.style.color = badColor;
        message2s15.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s15()
{
    var message3s15 = document.getElementById('confirmMessage3s15');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s15.value == '21978'){
		tag4s15.style.display = 'block';
		answer3s15.style.backgroundColor = goodColor;
		message3s15.style.color = goodColor;
        message3s15.innerHTML = 'That is correct!'
	}
	else{
		answer3s15.style.backgroundColor = badColor;
		message3s15.style.color = badColor;
        message3s15.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s16()
{
    var message1s16 = document.getElementById('confirmMessage1s16');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s16.value == '(24,50)'){
		tag2s16.style.display = 'block';
		answer1s16.style.backgroundColor = goodColor;
		message1s16.style.color = goodColor;
        message1s16.innerHTML = 'That is correct!'		
	}
	else{
		answer1s16.style.backgroundColor = badColor;
		}
}  

function checkPass2s16()
{
    var message2s16 = document.getElementById('confirmMessage2s16');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s16.value == '3a-2b'){
		tag3s16.style.display = 'block';
		answer2s16.style.backgroundColor = goodColor;
		message2s16.style.color = goodColor;
        message2s16.innerHTML = 'That is correct!'
	}
	else{
		answer2s16.style.backgroundColor = badColor;
		message2s16.style.color = badColor;
        message2s16.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s16()
{
    var message3s16 = document.getElementById('confirmMessage3s16');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s16.value == '20'){
		tag4s16.style.display = 'block';
		answer3s16.style.backgroundColor = goodColor;
		message3s16.style.color = goodColor;
        message3s16.innerHTML = 'That is correct!'
	}
	else{
		answer3s16.style.backgroundColor = badColor;
		message3s16.style.color = badColor;
        message3s16.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s17()
{
    var message1s17 = document.getElementById('confirmMessage1s17');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s17.value == '70'){
		tag2s17.style.display = 'block';
		answer1s17.style.backgroundColor = goodColor;
		message1s17.style.color = goodColor;
        message1s17.innerHTML = 'That is correct!'		
	}
	else{
		answer1s17.style.backgroundColor = badColor;
		}
}  

function checkPass2s17()
{
    var message2s17 = document.getElementById('confirmMessage2s17');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s17.value == '12'){
		tag3s17.style.display = 'block';
		answer2s17.style.backgroundColor = goodColor;
		message2s17.style.color = goodColor;
        message2s17.innerHTML = 'That is correct!'
	}
	else{
		answer2s17.style.backgroundColor = badColor;
		message2s17.style.color = badColor;
        message2s17.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s17()
{
    var message3s17 = document.getElementById('confirmMessage3s17');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s17.value == '-10'){
		tag4s17.style.display = 'block';
		answer3s17.style.backgroundColor = goodColor;
		message3s17.style.color = goodColor;
        message3s17.innerHTML = 'That is correct!'
	}
	else{
		answer3s17.style.backgroundColor = badColor;
		message3s17.style.color = badColor;
        message3s17.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s18()
{
    var message1s18 = document.getElementById('confirmMessage1s18');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s18.value == '1'){
		tag2s18.style.display = 'block';
		answer1s18.style.backgroundColor = goodColor;
		message1s18.style.color = goodColor;
        message1s18.innerHTML = 'That is correct!'		
	}
	else{
		answer1s18.style.backgroundColor = badColor;
		}
}  

function checkPass2s18()
{
    var message2s18 = document.getElementById('confirmMessage2s18');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s18.value == '-7600'){
		tag3s18.style.display = 'block';
		answer2s18.style.backgroundColor = goodColor;
		message2s18.style.color = goodColor;
        message2s18.innerHTML = 'That is correct!'
	}
	else{
		answer2s18.style.backgroundColor = badColor;
		message2s18.style.color = badColor;
        message2s18.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s18()
{
    var message3s18 = document.getElementById('confirmMessage3s18');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s18.value == '53'){
		tag4s18.style.display = 'block';
		answer3s18.style.backgroundColor = goodColor;
		message3s18.style.color = goodColor;
        message3s18.innerHTML = 'That is correct!'
	}
	else{
		answer3s18.style.backgroundColor = badColor;
		message3s18.style.color = badColor;
        message3s18.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s19()
{
    var message1s19 = document.getElementById('confirmMessage1s19');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s19.value == '-5'){
		tag2s19.style.display = 'block';
		answer1s19.style.backgroundColor = goodColor;
		message1s19.style.color = goodColor;
        message1s19.innerHTML = 'That is correct!'		
	}
	else{
		answer1s19.style.backgroundColor = badColor;
		}
}  

function checkPass2s19()
{
    var message2s19 = document.getElementById('confirmMessage2s19');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s19.value == '243'){
		tag3s19.style.display = 'block';
		answer2s19.style.backgroundColor = goodColor;
		message2s19.style.color = goodColor;
        message2s19.innerHTML = 'That is correct!'
	}
	else{
		answer2s19.style.backgroundColor = badColor;
		message2s19.style.color = badColor;
        message2s19.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s19()
{
    var message3s19 = document.getElementById('confirmMessage3s19');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s19.value == '1009/2019'){
		tag4s19.style.display = 'block';
		answer3s19.style.backgroundColor = goodColor;
		message3s19.style.color = goodColor;
        message3s19.innerHTML = 'That is correct!'
	}
	else{
		answer3s19.style.backgroundColor = badColor;
		message3s19.style.color = badColor;
        message3s19.innerHTML = 'Incorrect. Please try again.'
		}
}  



function checkPass1s20()
{
    var message1s20 = document.getElementById('confirmMessage1s20');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer1s20.value == '27'){
		tag2s20.style.display = 'block';
		answer1s20.style.backgroundColor = goodColor;
		message1s20.style.color = goodColor;
        message1s20.innerHTML = 'That is correct!'		
	}
	else{
		answer1s20.style.backgroundColor = badColor;
		}
}  

function checkPass2s20()
{
    var message2s20 = document.getElementById('confirmMessage2s20');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer2s20.value == '2'){
		tag3s20.style.display = 'block';
		answer2s20.style.backgroundColor = goodColor;
		message2s20.style.color = goodColor;
        message2s20.innerHTML = 'That is correct!'
	}
	else{
		answer2s20.style.backgroundColor = badColor;
		message2s20.style.color = badColor;
        message2s20.innerHTML = 'Incorrect. Please try again.'
		}
}  

function checkPass3s20()
{
    var message3s20 = document.getElementById('confirmMessage3s20');
    var goodColor = '#66cc66';
    var badColor = '#ff6666';
    
	if(answer3s20.value == '2'){
		tag4s20.style.display = 'block';
		answer3s20.style.backgroundColor = goodColor;
		message3s20.style.color = goodColor;
        message3s20.innerHTML = 'That is correct!'
	}
	else{
		answer3s20.style.backgroundColor = badColor;
		message3s20.style.color = badColor;
        message3s20.innerHTML = 'Incorrect. Please try again.'
		}
}  








</script>


<?php
if ($_POST['check']) {

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
 

$sql = "SELECT MAX(station_s1) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;



if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s1) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s1='1' WHERE team_name= 'indigo' ";

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_1) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s1='2' WHERE team_name= 'indigo' ";

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_1) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s1='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}

if ($_POST['checks2']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s2) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes2']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s2) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s2='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s2']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s2) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s2='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s2']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s2) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s2='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}




if ($_POST['checks3']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s3) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes3']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s3) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s3='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s3']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s3) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s3='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s3']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s3) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s3='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}




if ($_POST['checks4']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s4) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes4']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s4) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s4='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s4']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s4) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s4='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s4']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s4) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s4='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}



if ($_POST['checks5']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s5) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes5']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s5) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s5='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s5']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s5) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s5='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s5']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s5) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s5='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks6']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s6) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes6']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s6) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s6='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s6']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s6) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s6='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s6']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s6) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s6='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks7']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s7) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes7']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s7) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s7='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s7']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s7) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s7='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s7']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s7) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s7='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks8']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s8) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes8']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s8) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s8='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s8']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s8) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s8='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s8']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s8) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s8='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks9']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s9) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes9']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s9) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s9='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s9']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s9) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s9='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s9']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s9) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s9='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks10']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s10) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes10']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s10) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s10='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s10']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s10) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s10='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s10']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s10) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s10='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks11']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s11) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes11']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s11) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s11='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s11']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s11) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s11='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s11']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s11) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s11='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks12']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s12) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes12']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s12) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s12='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s12']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s12) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s12='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s12']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s12) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s12='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks13']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s13) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes13']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s13) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s13='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s13']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s13) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s13='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s13']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s13) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s13='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks14']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s14) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes14']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s14) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s14='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s14']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s14) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s14='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s14']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s14) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s14='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks15']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s15) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes15']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s15) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s15='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s15']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s15) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s15='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s15']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s15) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s15='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks16']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s16) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes16']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s16) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s16='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s16']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s16) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s16='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s16']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s16) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s16='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks17']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s17) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes17']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s17) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s17='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s17']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s17) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s17='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s17']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s17) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s17='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks18']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s18) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes18']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s18) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s18='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s18']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s18) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s18='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s18']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s18) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s18='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks19']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s19) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes19']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s19) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s19='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s19']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s19) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s19='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s19']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s19) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s19='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}


if ($_POST['checks20']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s20) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("This territory is already dominated. Choose another.")';
        echo '</script>';

}
else {
           echo '<script language="javascript">';
        echo 'alert("Still up for grabs! Attack while you still can!")';
        echo '</script>';
}
}



if ($_POST['takes20']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s20) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s20='1' WHERE team_name= 'indigo' ";

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
}




if ($_POST['take2s20']) {

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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s20) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s20='2' WHERE team_name= 'indigo' ";

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
}






if ($_POST['take3s20']) {
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
 
// SELECT MAX(  `age` ) ,  `name` FROM  `people` WHERE 1
$sql = "SELECT MAX(station_s20) AS TMP FROM progress";
$rs = mysqli_query($conn, $sql);
$rowmax = mysqli_fetch_assoc($rs);    // this was missing
$valuemax=$rowmax['TMP'];
echo $valuemax;


// echo $rs[0];
//echo $TMP;


if ($valuemax > 2.5){echo '<script language="javascript">';
        echo 'alert("Already dominated")';
        echo '</script>';

}
else {$sql = "UPDATE progress SET station_s20='3' WHERE team_name= 'indigo' ";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

      // if calculate => add
      //case 'attack':
           echo '<script language="javascript">';
        echo 'alert("Territory Dominated. Successfully locked out all other teams.")';
        echo '</script>';
}

}





?>



</body>
</html>