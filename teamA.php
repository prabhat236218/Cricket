<?php

$servername = "localhost";
$username = "root";
$password = "kumar";
$dbname = "a";

$tScore=0;
$tBall=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO xyz(name ,city ,girlfriend ) values('prabhat','shamli','shubhangi')";
$sql="SELECT * from cricket";
$result = mysqli_query($conn, $sql);
//$sql="DROP DATABASE a";
/*if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo "Name: " . $row["name"]. "<br>";
       echo "city: " . $row["girlfriend"]. "<br>";
    }
 } else {
    echo "0 results";
 }*/


 //if($conn->query($sql)==true)
 //echo "dropped successfully";

 mysqli_close($conn);
?>
 <html>
 <head>
     <title>Displaying MySQL Data in HTML Table</title>
     <style type="text/css">
        body {
	font-size: 120%;
	background: #F8F8FF;
	background-image: url(http://hdwpro.com/wp-content/uploads/2016/03/Best-Cricket-Wallpaper.jpeg);
}
         table {
             margin: auto;
             font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
             font-size: 12px;
         }
 
         h1 {
             margin: 25px auto 0;
             text-align: center;
             text-transform: uppercase;
             font-size: 17px;
         }
 
         table td {
             transition: all .5s;
         }
         p{
             border:0px solid green;
             margin-left:415px;
             margin-top:10px;
             margin-bottom:0px;
             margin-right:415px;
             background-color:orange;
         }
         p:hover{
            background-color:green;
            color:white;
         }

         /* Table */
         .data-table {
             border-collapse: collapse;
             font-size: 14px;
             min-width: 537px;
             margin-top:50px;
         }
 
         .data-table th, 
         .data-table td {
             border: 1px solid #e1edff;
             padding: 7px 17px;
         }
         .data-table caption {
             margin: 7px;
         }
 
         /* Table Header */
         .data-table thead th {
             background-color: #508abb;
             color: #FFFFFF;
             border-color: #6ea1cc !important;
             text-transform: uppercase;
         }
 
         /* Table Body */
         .data-table tbody td {
             color: #353535;
         }
         .data-table tbody td:first-child,
         .data-table tbody td:nth-child(4),
         .data-table tbody td:last-child {
             text-align: center;
         }
 
         .data-table tbody tr:nth-child(odd) td {
             background-color: #f4fbff;
         }
         .data-table tbody tr:hover td {
             background-color: #ffffa2;
             border-color: #ffff0f;
         }
 
         /* Table Footer */
         .data-table tfoot th {
             background-color: #e5f5ff;
             text-align: right;
         }
         .data-table tfoot th:first-child {
             text-align: left;
         }
         .data-table tbody td:empty
         {
             background-color: #ffcccc;
         }
     </style>
 </head>
 <body>
     
     <table class="data-table">
         <caption class="title">TEAM A SCOREBOARD</caption>
         <thead>
             <tr>
                 <th>BATSMEN</th>
                 <th>R</th>
                 <th>B</th>
                 <th>4s</th>
                 <th>6s</th>
               
                 
             </tr>
         </thead>
         <tbody>
         <?php
        
         while ($row = mysqli_fetch_assoc($result))
         {
            // $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
             echo '<tr>
                   
                     <td>'.$row['BATSMEN'].'</td>
                     <td>'.$row['R'].'</td>
                     <td>'.$row['B'].'</td>
                     <td>'.$row['4s'].'</td>
                     <td>'.$row['6s'].'</td>
                 </tr>';
                 $tScore+=$row['R'];
                 $tBall+=$row['B'];
            // $total += $row['amount'];
             //$no++;
         }?>
         </tbody>
        
     </table>

<p> total run:   
  <?php
    echo '<tr><td>' .$tScore. '</td></tr>'; 
    echo  "/".round($tBall/6) . "." . $tBall%6 ."\n";
  ?>
<p>
 </body>
 </html>





