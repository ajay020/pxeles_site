<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
  body{
    /*background-color: gray;*/
  }
  .nav_container{
      background-image: url('images/nav_bg_2.jpeg');
      background-repeat: no-repeat;
      padding-bottom: 70px;
   }

   .nav.navbar-nav.navbar-right li a {
    color: white;
   }
   .nav.navbar-nav.navbar-right ul li a {
    color: gray;
   }
   .hero_content{
      max-width: 650px;
      width: 100%;
      margin: 0 auto;
      padding: 12px;
      /*background-color: gray;*/
    }

    .srh_btn{
      /*display: inline-block;*/
    }

    form input{
      padding: 12px;
      max-width: 600px;
      width: 100%;
      /*display: inline-flex;*/
      border: none;
      margin: 12px 0px 12px 12px;
      border-radius: 4px 0 0px 4px;
      outline: none;
    
    }

    form button{
      padding: 12px;
      border: none;
      background-color: white;
      margin: 12px 12px 12px 0px;
      border-radius: 0px 4px 4px 0px;
    }
    
     .navbar-nav > li > a:hover,  .navbar-nav > li > a:focus {
      background-color: transparent;
      /*color: red;*/
    }
    .dropdown:hover .dropdown-menu{
      display: block;
      margin-top: 0px;
    }
    .search_field{
      display: flex;
    }
    .search_list_container{
      /*display: flex;*/
      /*justify-content: space-between;*/
      /*align-items: center;*/
    }

    .search_list_container_tag{
        display: flex;
        list-style: none;
        /*justify-content: space-around;*/
        width: 100%;
        /*background-color: green;*/
        margin-left: 0;
        margin: 2px 12px 12px 12px;

    }
    .search_list_container_tag li{
        color: white;
        margin-left: 3px;
        margin-right: 3px;
    }
    .btn-upload{
      background-color: #0f918b;
      color: white;
      border-style: none;
      margin: auto 2px; 
      font-weight: bold;
      padding: 10px;
      line-height: 12px;
    }

    .title_tab{
      display: flex;
      /*font-size: 14px;*/
      color: #d3d3d3;
      align-items: baseline;
     }

    .title_tab_title{
      font-weight: 550;
      color: #1a1a1a;
      margin-right: 8px;
      margin-left: 8px;
    }
    .title_tabs_tab_active{
      color: #1a1a1a;
      /*font-weight: 600;*/
      cursor: default;
      text-decoration: none;
      margin-right: 4px;
    }
    .title_tabs_tab{
      color: inherit;
      text-decoration: none;
    }
   
    @media(min-width: 768px){
         .photos{
           display: flex;
           /*flex-direction: row;*/
           align-items: flex-start;
           /*flex-wrap: wrap;*/
           justify-content: space-around;
           /*background-color: blue;*/
       }
    }

    .photo_item{
      margin: 16px 8px 10px 8px;
      /*background-color: yellow;*/
      /*flex: 1;*/

      /*flex: 1 1 auto;*/
      /*flex-grow: 1;*/

      /*flex-shrink: 2;*/
      /*flex-basis: all;*/
      /*width: 300px;*/
      /*padding-left: 8px;*/
      /*padding-right: 8px;*/
    }
       
    .photo_item_single{
      position: relative;
      margin-bottom: 16px; 
      /*width: 300px; */
    }

    .photo_item_single img{
       width: 100%;
    }

     .photo_item_info{
      display: none;
      width: 100%;
      position: absolute;
      bottom: 5px;
      z-index: 2;
      /*background-color: gray;*/
      padding: 4px;
      align-items: center;
      
     }  

     .photo_item_single:hover .photo_item_info{
      display: flex;
     }
     .photo_item_info img{
       width: 50px;
       height: 50px;
       border-radius: 50%;
       padding: 1px;
       background-color: gray;
       margin-top: 12px;
     }
     .photo_info_title{
      color: white;
      /*font-weight: bold;*/
      margin-left: 12px;
      padding: 1px;
     }
     .photo_info_add{
      color: white;
      padding: 1px;
      margin-left: auto;
       font-size: 18px;
     }
     .photo_info_like{
       padding: 1px;
       color: white;
       margin-left: 30px;
       margin-right: 20px;
       font-size: 18px;
     }



  </style>
  
</head>
<body>
    <header class="container-fluid nav_container"> 
   <!-- nav bar starts here -->
     <nav class="navbar">
        <div class="container-fluid">
             <div class="navbar-header">
               <a  href="#"><img class="navbar-brand" src="images/pexels_logo.png"></a>
               <a class="navbar-brand" style="color: white;" href="#">Pexels</a>
             </div>
             <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                <a class="dropdown-toggle" " data-toggle="dropdown" href="#">Explore</a>
                <ul class="dropdown-menu" >
                    <li><a href="#">Discover Photos</a></li>
                    <li><a href="#">Popular photos</a></li>
                    <li><a href="#">Popular Searches</a></li>
                    <li><a href="#">Leaderboard</a></li>
                    <li><a href="#">Challanges</a></li>
                    <li><a href="#">Photo by color</a></li>
                    <li><a href="#">Free videos</a></li>
                    <li><a href="#">Pexels stories</a></li>
                </ul>
              </li>
               <li><a href="#">License</a></li>
               <li>
                 <a href="join.php">Join</a>
                 
               </li>
               <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="#">...</a>
                <ul class="dropdown-menu" style="width: 200px;">
                    <li><a href="#">Log in </a></li>
                    <li><a href="#">join</a></li>
                    <li><a href="#">Change Language</a></li>
                    <li><a href="#">Apps & PS plugin</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Imprint & Terms</a></li>
                    <li></li>
                </ul>
               </li>
               <li><a href="upload_file.php"><button class="btn btn-default btn-upload">Upload</button></a></li>
             </ul>
            
         </div>
      </nav>
   <!-- nav bar ends here -->

      <section class="hero_content">
        <h1 style="margin: 12px;color: white;">The best free stock photos & videos shared by talented creators.</h1>

        <div>
          <form>
             <div class="search_field">
               <input  type="search"placeholder="Search for free photos and videos">
               <button class="srh_btn" title="search">
                 <span style="color: gray;" class="glyphicon glyphicon-search">
               </button>
             </div>
             <div class="search_list_container">
               <ul class="search_list_container_tag">
                     <li><b>Suggested:</b></li>
                     <li>security</li>
                     <li>,nature</li>
                     <li>,wallpaper</li>
                     <li>,hair</li>
                     <li>,cooking</li>
                     <li>,success</li>
                     <li>,light</li>
                     <li>,more</li>
               </ul>
             </div>

          </form>

        </div>
      </section>
   
    </header>

    <div class="container-fluid">
      <div class="title_tab">
        <h3 class ="title_tab_title">Free Stock Photos</h3>
        <span class="title_tabs_tab_active" href="#">Trending</span>
        <a class="title_tabs_tab" href="#">| New</a>
      </div>
      <div class="photos"> 
         <div class="photo_item">
            <div class="photo_item_single" >
              <img src="images/elina.jpeg"> 
              <div class="photo_item_info">
               <img src="images/wendy.jpeg">
               <h4 class="photo_info_title">Elina Nutrem</h4>
               <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
               <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            <div class="photo_item_single" >
              <img src="images/wei.jpeg"> 
              <div class="photo_item_info">
               <img src="images/wendy.jpeg">
               <h4 class="photo_info_title">Wei ximp</h4>
               <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
               <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            <div class="photo_item_single" >
              <img src="images/lina.jpeg"> 
              <div class="photo_item_info">
               <img src="images/wendy.jpeg">
               <h4 class="photo_info_title">Emre Kuzu</h4>
               <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
               <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            <div class="photo_item_single" >
              <img src="images/hild.jpeg"> 
              <div class="photo_item_info">
               <img src="images/wendy.jpeg">
               <h4 class="photo_info_title">Emre Kuzu</h4>
               <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
               <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            
         </div>
         <div class="photo_item">
            <div class="photo_item_single" >
              <img src="images/laura.jpeg"> 
              <div class="photo_item_info">
                <img src="images/wendy.jpeg">
                <h4 class="photo_info_title">Emre Kuzu</h4>
                <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div>
            <div class="photo_item_single" >
              <img src="images/shev.jpeg"> 
              <div class="photo_item_info">
                <img src="images/wendy.jpeg">
                <h4 class="photo_info_title">Emre Kuzu</h4>
                <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            <div class="photo_item_single" >
              <img src="images/wendy.jpeg"> 
              <div class="photo_item_info">
                <img src="images/wendy.jpeg">
                <h4 class="photo_info_title">Emre Kuzu</h4>
                <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            
           <!-- <img src="images/arun.jpeg"> -->
           <!-- <img src="images/shev.jpeg"> -->
         </div>
         <div class="photo_item">
            <div class="photo_item_single" >
              <img src="images/lssa.jpeg"> 
              <div class="photo_item_info">
               <img src="images/wendy.jpeg">
               <h4 class="photo_info_title">Lssa kumz</h4>
               <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
               <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div> 
            <div class="photo_item_single" >
              <img src="images/dariya.jpeg"> 
              <div class="photo_item_info">
               <img src="images/wendy.jpeg">
               <h4 class="photo_info_title">Dariya Kzem</h4>
               <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
               <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div>
            <div class="photo_item_single" >
              <img src="images/bruno.jpeg"> 
              <div class="photo_item_info">
                <img src="images/wendy.jpeg">
                <h4 class="photo_info_title">Bruno martin</h4>
                <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div>

            <div class="photo_item_single" >
              <img src="images/krima.jpeg"> 
              <div class="photo_item_info">
                <img src="images/wendy.jpeg">
                <h4 class="photo_info_title">Krima zen</h4>
                <a class="photo_info_add" ><span class="glyphicon glyphicon-plus-sign"></span></a>
                <a class="photo_info_like"><span class="glyphicon glyphicon-heart-empty"></span></a>
              </div>
            </div>

         </div>
      </div> 
    </div>
</body>
</html>

<?php 
  mysql_connect("localhost","root","") or die("server error!");
  mysql_select_db("mydb") or die("database error!");
  
  $nameErr = $emailErr = "";
  $passwordErr = "";
  $name = $email= $password = "";


  if(isset($_POST["reg"])){

   if(empty($_POST["name"])){
    $nameErr = "Name is required";
   }else{
    $name = test_input($_POST["name"]);
   }
    // $name = $_POST["name"];
   if(empty($_POST["email"])){
    $emailErr = "Email is required";
   }else{
    $email = test_input($_POST["email"]);
   }
    // $email = $_POST["email"];

    if(empty($_POST['password'])){
      $passwordErr = "password required";
    }else{
      $password = test_input($_POST["password"]);
    }

    // $password = $_POST["password"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    //insert value into register table 
    if(!empty($name) && !empty($email) && !empty($password) ){
         mysql_query("insert into register values('$name','$email','$password',
          $phone,'$gender','$country')");
 
         echo "<script> alert ('signed up successfully') </script>"; 
     }else{
      echo "enter required fields";
     }
  }

  function test_input($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
  }   

?>

<!--  retrive file  -->


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







