<?php
 
$servername = "localhost";
$username = "root";
$password = "kumar";
$dbname = "registration";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['b3'])){
$name=$_POST['name'];
// Create connection

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO cricketB(BATSMEN,R,B,4s,6s)values ('$name',0,0,0,0)";
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
    print '<script type="text/javascript">'; 
    print 'alert("name---'. $name.' is registered")'; 
    print '</script>';
    //echo " ".."";
 } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
 }
}
if(isset($_POST['b4']))
{
    $sql="DELETE from cricketB";
    $result = mysqli_query($conn, $sql);
   
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

 //if($conn->query($sql)==true)
 //echo "dropped successfully";

 mysqli_close($conn);

?>