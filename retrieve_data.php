<!DOCTYPE html>
<html>
<head>
	<title>Reterive data</title>
</head>
<body>

   <form method="post" action="">
  	 Enter a Name : <input type="text" name="user"/><br/>
     <input type="submit" name="sub" value="Retrieve"/>
  </form>

</body>
</html>

<?php
 
 // connect with local server
 mysql_connect("localhost", "root","") or die("server error");
 mysql_select_db("mydb") or die("databse error");

  if(isset($_POST['sub'])){

       // Get a perticular user
      $user  = $_POST['user'];
      // $query = mysql_query("select * from register where name = '$user' ");
      // filter query 
      $query = mysql_query("select * from register where name like '%$user%'");

      //$query = mysql_query("select * from register");

       	echo "<table  border='1' cellpadding='20' cellspacing='0'> <tr> 
         <th>Name</th>
         <th>Email</th>
         <th>Country</th>
         <th>Phone</th>
         <th>Password</th>
      	</tr>";
      while ($row = mysql_fetch_array($query)) {
      	// echo $row['name']." ".$row['email'] ." ".$row['password'] ." ".$row['phone'];
         echo "<tr><td>". $row['name'] ."</td>".  
         "<td>". $row['email'] ."</td>".
         "<td>". $row['country'] .
         "<td>". $row['phone'] .
         "<td>". $row['password'] .
         "</td></tr>";
      }

      echo "</table>";
  }

 ?>