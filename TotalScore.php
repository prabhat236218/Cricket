<?php

$servername = "localhost";
$username = "root";
$password = "kumar";
$dbname = "a";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO xyz(name ,city ,girlfriend ) values('prabhat','shamli','shubhangi')";
$sql="SELECT R,B from cricket";
$result = mysqli_query($conn, $sql);
//$sql="DROP DATABASE a";
$tScore=0;
$tBall=0;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
          $tScore+=$row['R'];
          $tBall+=$row['B'];
      // echo "Name: " . $row['R']. "<br>";echo "city: " . $row["girlfriend"]. "<br>"
       
    }
 } else {
    echo "0 results";
 }
 
 //echo  "totalScore :". $tScore. " \n ";
 //echo   "Total Ball :". $tBall. " \n";
// echo  "".round($tBall/6) . "." . $tBall%6 ."\n";

 //if($conn->query($sql)==true)
 //echo "dropped successfully";

 mysqli_close($conn);
?>
<html>
<body>
<?php

echo '<tr><td>' .$tScore. '</td></tr>';
echo  "/".round($tBall/6) . "." . $tBall%6 ."\n";
?>
 
</body>   


</html>
     


