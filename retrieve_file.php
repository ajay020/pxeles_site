<!DOCTYPE html>
<html>

<body>

  <form method="post" action="">
      <input type="text" name="user"/><br/>
      <input type="submit" value="Click" name="submit"/>
  </form>

</body>
</html>

<?php

 $con = mysql_connect("localhost","root","")or die("server error");
 mysql_select_db("pexels")or die("database error");
 if(@$_POST["submit"]){
 	$name=$_POST["user"];
 	$result = mysql_query("SELECT * from upload where name='$name'")or die("query error");
 	$row= mysql_fetch_array($result);
 	echo "<img src='images/".$row['photo']."' height='130px' width='130px'>"."<br>".
 	"Name :".$row['name'] ."<br>"."Email :" .$row['email'];
 }

?>