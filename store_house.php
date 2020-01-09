 <!-- <form method="post" action="" enctype="multipart/form-data">
    <table>
  	 <tr><td>Name</td><td><input type="text" name="user"/></td></tr>
  	 <tr><td>Email</td><td><input type="text" name="email"/></td></tr>
  	 <tr><td>Photo</td><td><input type="file" name="file"/></td></tr>
     <tr><td><input type="submit" name="sub" value="Submit"></td></tr>
    </table>
  </form> -->

  <!-- <?php

  $con=mysql_connect("localhost","root","") or die("server error");
  mysql_select_db("pexels",$con) or die("database error");

  if(@$_POST["sub"])
  {
  	  $name=$_POST["user"];
  	  $email=$_POST["email"];
  	  $file=$_FILES["file"];
  	  $file_name = $file['name'];
  	  $file_type = $file['type'];
  	  $file_size = $file['size'];
  	  $file_path = $file['tmp_name'];
      
      if($file_name != "" && ($file_type="image/jpeg" || $file_type="image/png" || $file_type="image/gif") && $file_size<=614400){
      	if(move_uploaded_file($file_path, 'images/'.$file_name)){
      		$query = mysql_query("insert into upload(name,email,photo)
      			values('$name','$email','$file_name')") or die("query error");

      		if($query == true){
      			echo "File uploaded";
      		}
      	}
      }
  }
  
 ?> -->