

<?php

$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

?>

<!DOCTYPE html>
<html>
<?php

   
if(isset($_POST['Submit']))
{
  
       $name=$_POST['email'];
       $pass=$_POST['pass'];
       $result=mysqli_query($conn," SELECT * FROM admin where email='$name' and pass='$pass' ");
         

 if( mysqli_num_rows($result)==1)

       {
         $message = "Id or Password Matched.";
         echo "<script type='text/javascript'>alert('$message');</script>";
         header("location:view_admin.php");
            
       }
       else 
       {
         $message = "Id or Password not Matched.";
        echo "<script type='text/javascript'>alert('$message');</script>";
         
       }
   }                

?>
<head>
<title>Admin_login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
  background:rgb(242, 204, 255);
margin:0;
    padding:0;
    display:flex;
align-items:center;
min-height:100vh;
font-family:Century Gothic;
   position:relative;

}


  .menu{
   
    width: 30%;
       margin: 0px;
   display: inline-block;
   margin-top:-590px;
   

   
}
.menu a{
float:left;
   width: 35%;
   padding:5px 20px; 
   border: 1px solid transparent;
   text-decoration: none;
   color:white;
   font-weight: bold;
   text-align: center;
}
    .menu a:hover{
   background-color:white;
    color:black;
}
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
  border-radius:3px 0px 0px 3px ;

}
.input-field {
  width: 100%;
  padding: 10px;
  border:none;
  border-radius:0px 3px 3px 0px ;

}

.input-field:focus {
  border: 2px solid dodgerblue;
}
.sing { 
  background:rgb(153, 0, 204);

      
        width: 500px; height: 450px;
        margin:60px 0px 0px 230px;
        color:white;
        margin-left:40px;
        position:center;
        font-size: 18px;
       padding: 10px;
       
       }
       #Submit{
          width: 100%;
              padding: 10px;
              font-family: sans-serif;
              font-size: 20px;
              font-style: italic;
              font-weight: 600px;
              border: none;
             
           border-radius:3px ;
           background: white;
          color:black;
              
          }
#Submit:hover{background-color:#00b894;}
.im{
             width: 100px; 
             height: 100px;
             position: relative;
             top:-50px;
             left: calc((500px - 100px)/2);
             
         }

</style>
</head>
<body>
<div class="menu">
               <a href="index.php">Home Page</a>
            <a href="admin_registration.php">Registration</a>
            </div>
            
            <div class="sing" >
            <br><br>
            <center><h2 style="color:#fff;font-style:italic;font-family:sans-serif;margin-top:-18px;">Admin Login </h2></center><br>
            <br><br>
<form method="post" action="" >
<center><h2 style="color:#fff;font-family:sans-serif;font-size:20px">Admin-ID</h2></center>

<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  <center><h2 style="color:#fff;font-family:sans-serif;font-size:20px">Password</h2></center>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass">
  </div>
 <br>

<input type="Submit" placeholder="Submit" name="Submit" id="Submit">
</form>
</div>
</body>
</html>