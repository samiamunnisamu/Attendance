

<?php
session_start();
$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

?>

<!DOCTYPE html>
<html>
<?php

   
if(isset($_POST['Submit']))
{
  
       $name=$_POST['teacher_email'];
       $pass=$_POST['teacher_password'];
       $pass2=$_POST['date'];
       $_SESSION['date1']=$pass2;
       $result=mysqli_query($conn," SELECT * FROM teacher where teacher_email='$name' and teacher_password='$pass' ");
       $row=mysqli_fetch_assoc($result);
       $ss=$row['teacher_section'];
       $_SESSION['section1']=$ss;

 if( mysqli_num_rows($result)==1)

       { 
         $message = "Id or Password Matched.";
         echo "<script type='text/javascript'>alert('$message');</script>";
         header("location:teacher_give.php");
            
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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

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


</style>
</head>
<body>
<div class="menu">
               <a href="index.php">Home Page</a>
            
            </div>
            
            <div class="sing" >
            <br>
            <center><h2 style="color:#fff;font-style:italic;font-family:sans-serif;margin-top:-18px;">Teacher Login </h2></center><br>

<form method="post" action="" >
<center><h2 style="color:#fff;font-family:sans-serif;font-size:20px">Teacher Id</h2></center>

<div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="teacher_email">
  </div>
  <center><h2 style="color:#fff;font-family:sans-serif;font-size:20px">Password</h2></center>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="teacher_password">
  </div>

 <center><h2 style="color:#fff;font-family:sans-serif;font-size:20px">Date</h2></center>

 <div class="input-container">
    <i class="fas fa-calendar-alt icon"></i>
 
 <input type="Date" name="date"class="input-field"></div><br>

<input type="Submit" placeholder="Submit" name="Submit" id="Submit">
</form>
</div>
</body>
</html>