<?php
$servername = "localhost";
$username = "root";
$password = "kumar";
$dbname = "registration";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 if(isset($_POST['b1'])){
    $name=$_POST['name'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO cricket(BATSMEN,R,B,4s,6s)values ('$name',0,0,0,0)";
//$sql = "INSERT INTO xyz(name ,city ,girlfriend ) values('prabhat','shamli','shubhangi')";
///$sql="SELECT * from cricket";
$result = mysqli_query($conn, $sql);
//$sql="DROP DATABASE a";
/*if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo "Name: " . $row["name"]. "<br>";
       echo "city: " . $row["R"]. "<br>";
    }
 } else {
    echo "0 results";
 }*/
 if ($result>0) {
   // alert("Hello! I am an alert box!");
   print '<script type="text/javascript">'; 
   print 'alert("name---'. $name.' is registered")'; 
   print '</script>';
    //
    echo "New record inserted successfully";
    //echo " ".."";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
 }


 //if($conn->query($sql)==true)
 //echo "dropped successfully";
 }
 if(isset($_POST['b2']))
 {
    $sql="DELETE from cricket";
    $result = mysqli_query($conn, $sql);
   
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
 }
 mysqli_close($conn);
 
?>