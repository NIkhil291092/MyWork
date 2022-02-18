<html>
<head>
<title>admin page</title></head>
<body background="images/bg.jpg">
<center>
<br><br><br>
<div id="d1" style=" background-color:RGB(14,77,146); color:white; height:200; width:500; border-radius:10 10 10 10;">
<div id="d2" style="background-color:RGB(6,33,63); height:40; width=30; border-radius:10 10 0 0;">
  <h1 align="left">Admin Login </h1>
</div><br>
<form action="deshbord.php" method="post">
<br>
<strong>Email</strong>
<input type="Email" name="t1" >
<br>
   <br><b> PASSWORD</b>: <input type="password" name="t2" ><br>
<br><input type="submit" value="LOGIN">
</form>
</div>
<br>
<?php
$a=$_GET['x'];
echo"<center><font color='#FF0000' size='+2'>$a</font></center>";
?>
<font color="#990000">Copyright 2017 indiancaoching.ac.in All rights reserved.<br>
<font>

</center>
</body>
</html>
