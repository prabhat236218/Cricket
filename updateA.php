<?php
 
$servername = "localhost";
$username = "root";
$password = "kumar";
$dbname = "registration";
$name=$_POST['name'];
$r=$_POST['r'];
$b=$_POST['b'];
$f=$_POST['f'];
$s=$_POST['s'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$sql = "INSERT INTO cricketB(BATSMEN,R,B,4s,6s)values ('$name',0,0,0,0)";
//$sql = "INSERT INTO xyz(name ,city ,girlfriend ) values('prabhat','shamli','shubhangi')";
$sql="SELECT * from cricket where BATSMEN='$name'";
$result = mysqli_query($conn, $sql);
//$sql="DROP DATABASE a";
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       //echo "Name: " . $row["BATSMEN"].+ " name2".$name. "<br>";
      // echo "Run: " . $row["R"]+$r. "<br>";
       //echo "Ball: ". $row["B"]+$b. "<br>";
       $r=$r+$row['R'];
       $b=$b+$row['B'];
       $f=$f+$row['4s'];
       $s=$s+$row['6s'];
    }
  
 } else {
    echo "0 results";
 }
 

 $sql1="UPDATE cricket set R='$r',B='$b',4s='$f',6s='$s' where BATSMEN='$name'";
 $result1 = mysqli_query($conn, $sql1);
 if($result1>0) {
    print '<script type="text/javascript">'; 
   print 'alert("updated successfully")'; 
   print '</script>';
 } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
 }


 //if($conn->query($sql)==true)
 //echo "dropped successfully";

 mysqli_close($conn);

?>