<!DOCTYPE html>
<html>
<head>
	<title>Login user</title>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <style type="text/css">
     	body{
     		background-image: url("images/login_bg.jpeg");
     		background-repeat: no-repeat;
     		background-size: cover;
     	}
     </style>
</head>
<body >

  <form method="post" style="width: 40%; margin: 12px auto; 
  background-color:white; padding: 20px; border: 1px solid green;">
             <h1 style="text-align: center;">Login</h1>
             <div class="form-group"> 
                 <label for="username">Name:</label>
                 <input type="text" class="form-control" placeholder="Enter username" 
                 id="name" name="name" required>
             </div>
              
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="Enter password"
               id="password" name="password" required>
               
            </div>
          <button type="submit" style="padding : 10px 20px 10px 20px;" 
          name="login" value="Login" class="btn btn-success">Login</button>
   </form>


</body>
</html>


<?php
   //starring session 
   session_start();

   // mysql_connect("localhost","root","")or die("server error");
   // mysql_select_db("mydb")or die("database error");
   
   if(isset($_POST["login"]))
   {
   	   $username=$_POST["name"];
   	   $password=$_POST["password"];
   	   
   	   if(!empty($username) && !empty($password) ){

            $host_name = 'localhost';
            $db_user ='root';
            $db_pass = '';
            $db_name = 'mydb';

            $con = mysql_connect($host_name, $db_user, $db_pass) or die ("Couldn't connect to server!");
            $db = mysql_select_db($db_name) or die ("Couldn't connect to database!");


         
          $query=mysql_query("Select *from register where Name='$username' and password='$password'")or die("query error");

           if(mysql_num_rows($query)==1)
            {
             $_SESSION["username"]=$username;//Store username to session for futher authorization
             header("location:home_page.php");//Redirect user to home_page
            }
            else
             {
             	 die("Please enter username and/or password!");
   	          // die "<script> alert('invalid user or password') </script>";
             }
         }
 
   	}
           	  
?>
