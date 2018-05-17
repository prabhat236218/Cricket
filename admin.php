
<!DOCTYPE html>
<html>
<head>
     
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>ADMIN SECTION</h2><br>
  
    <form  id="f1" method="post" action="AddA.php">
      
        <input type="submit" id="btn5" name="b1" value="Add Team A Member"></input>
        <input type="submit" id="btn5" name="b2" value="Delete A's Player"></input>
        <input type="text" id="t5" name="name" size="30" placeholder="please enter a  player name "></input>
      
    </form>
 
    <form  id="f2" method="post" action="AddB.php">
        <input type="submit" id="btn6" name="b3" value="Add Team B Member"></input>
        <input type="submit" id="btn6" name="b4" value="Delete B's Player"></input>
        <input type="text" id="t6" name="name" size="30" placeholder="please enter a  player name "></input>
    </form>
   
<br>
<form id="f3" method="post" action="updateA.php">
<button id="btn7" >UPDATE SCORE OF TEAM A</button>
<input type="text" id="t7"  name="name" placeholder="Player"></input>
<input type="text" id="t8"  name="r"   size="10" placeholder="Run"></input>
<input type="text" id="t9"  name="b"  size="10" placeholder="Ball"></input>
<input type="text" id="t10" name="f" size="10" placeholder="4s"></input>
<input type="text" id="t11" name="s" size="10" placeholder="6s"></input>
</form>
<br>

<form id="f4" method="post" action="updateB.php">
<button id="btn8" >UPDATE SCORE OF TEAM B</button>
<input type="text" id="t12" name="name" placeholder="Player"></input>
<input type="text" id="t13" name="r"  size="10" placeholder="Run"></input>
<input type="text" id="t14" name="b"  size="10" placeholder="Ball"></input>
<input type="text" id="t15" name="f" size="10" placeholder="4s"></input>
<input type="text" id="t16" name="s" size="10" placeholder="6s"></input>
</form>
    
</body>
</html>