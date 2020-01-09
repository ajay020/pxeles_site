<!DOCTYPE html>
<html>
<head>
	<title>Join Pxeles</title>

    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <style type="text/css">
  	body{
     		background-image: url("images/join_bg.jpg");
     		background-repeat: no-repeat;
     		background-size: cover;
  	}
  </style>
</head>
<body>
  
  <!-- nav bar starts here -->
     <nav class="navbar">
        <div class="container-fluid">
             <div class="navbar-header">
               <a  href="#"><img class="navbar-brand" src="images/pexels_logo.png"></a>
               <a class="navbar-brand" style="color: white;" href="#">Pexels</a>
             </div>
            
             <ul class="nav navbar-nav navbar-right">
               <!-- <li><a href="#"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
               <li><a href="login_page.php">Already using Pexels?
</a></li>
               <li><a id="login_state" href="login_page.php"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
             </ul>
         </div>
      </nav>
   <!-- nav bar ends here -->
  
      <!-- Sign Up Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: black;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="color: white;">Sign up</h4>
      </div>

      <div class="modal-body">
         
         <!-- <p> <span class="error">* required field</span> </p>  -->
         <form method="post" action="">
         	 <div class="form-group">	
                 <label for="username">Name:</label>
                 <input type="text" class="form-control" placeholder="Enter name.." 
                 id="name" name="name" required>
                 <!--  <span class="error">*
              	<?php echo $nameErr; ?>
              </span> -->
             </div>
              
            <div class="form-group">
              
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter email.."
               id="email" name="email" required>
               <!-- <span class="error">
               	* <?php echo $emailErr; ?>
               		
               	</span> -->	
            </div>
            <div class="form-group">
              
              <label for="pwd">Password:</label>
              <input type="password" placeholder="Enter password" class="form-control" id="pwd" name="password" required>
              <!-- <span class="error">
              	* <?php echo $passwordErr; ?>
              </span> -->
            </div>

            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" placeholder="Confirm password" class="form-control" id="pwd" name="password">
            </div>

            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="password" placeholder="Enter phone number" class="form-control" id="phone" name="phone">
            </div>

             <div class="">
               <label>Gender:</label>
               <input type="radio"   value="male" name="gender">Male
               <input type="radio"  value="female" name="gender">Female
             </div>

            <div style="margin-top: 8px;">
            <label>Country:</label>
				<select name="country" style="padding: 8px;">
					<option value="select">Select country</option>
					<option value="India">India</option>
					<option value="uk">UK</option>
					<option value="us">US</option>
				</select>
			</div>	
            <div class="checkbox">
             <label><input type="checkbox"> Remember me</label>
            </div>

            <button type="submit" name="reg" class="btn btn-success">Submit</button>
         </form>

      </div>

      <div class="modal-footer" style="background-color: black;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
  </div>


  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-body" style="height: 450px; overflow: auto;" >         
        <div>
          <h1 style="text-align: center;">Join Pexels</h1>
          <h5 style="text-align: center;font-size: 16px;justify-content: center;margin: 12px; padding: 12px;">Discover thousands of free photos you can use everywhere.</h5>
        </div>
        <div style="margin-top: 12px; margin-bottom: 14px;">
           <button type="submit" name="reg" class="btn btn-info btn-lg btn-block" style="border-style: none; background-color: blue; font-weight: bold;"><i class="fa fa-facebook" style="float: left; background-color: white;padding: 2px 4px 2px 4px ;color: blue;"></i>Join with Facebook</button>
        </div>
        <div>
          <h5 style="text-align: center;">OR</h5>
        </div>

         <form method="post" action="">
           <div class="form-group"> 
                 <label for="username">Name:</label>
                 <input type="text" class="form-control" placeholder="Enter name.." 
                 id="name" name="name" required>
               
            </div>
              
            <div class="form-group">
              
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter email.."
               id="email" name="email" required>
              
            </div>
            <div class="form-group">
              
              <label for="pwd">Password:</label>
              <input type="password" placeholder="Enter password" class="form-control" id="pwd" name="password" required>
              
            </div>

            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" placeholder="Confirm password" class="form-control" id="pwd" name="password">
            </div>

            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="password" placeholder="Enter phone number" class="form-control" id="phone" name="phone">
            </div>

             <div class="">
               <label>Gender:</label>
               <input type="radio"   value="male" name="gender">Male
               <input type="radio"  value="female" name="gender">Female
             </div>

            <div style="margin-top: 8px;">
               <label>Country:</label>
               <select name="country" style="padding: 8px;">
                 <option value="select">Select country</option>
                 <option value="India">India</option>
                 <option value="uk">UK</option>
                 <option value="us">US</option>
               </select>
            </div>  
            <div style="margin-top: 8px;">
              <button type="submit" name="reg" class="btn  btn-lg btn-block" style=" background-color: #0f918b;color: white; font-weight: bold;">Sign Up</button>
            </div>
            <div>
              <p style="font-size: 12px; margin-top: 4px;">By joining, you agree to our <b>Terms of Service</b> and <b>Privacy Policy</b></p>
            </div> 
         </form>

      </div>
<!-- 
      <div class="modal-footer" style="background-color: black;">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>

</body>
</html>