
<?php


$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

?>
  
   
  <html>
   <head>
     <title>admin_Singup</title>  
     <style> 
     *{
       margin:0;
       padding:0;
       
       
       } 
         body{   background:rgb(242, 204, 255);

               font-family: tahoma,geneva,sans-serif;
            background-size:cover; color: blue;
         
         }
        h2{
        text-align:center;
       padding:20px;
       }
      
      
     .sing { 
      background:rgb(153, 0, 204);

          width: 500px; height: 400px;
          color:white;
          font-size: 18px;
         padding: 10px;
       margin-left:400px;
       margin-top:100px;
         
         }
         #register{
             margin-left: 50px;
         }
         label{
             color:white;
             font-family: sans-serif;
             font-size: 18px;
            
             
         }
         #name{
             width: 450px;
             border: none;
             border-radius: 3px;
             outline: 0px;
             padding: 7px;
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
       .menu{width: 40%;
       margin: 24px;
   display: inline-block;

   
}
.menu a{
   width: 25%;
   padding:5px 25px;
   border: 1px solid #000;
   text-decoration: none;
   color:black;
   font-weight: bold;
   text-align: center;
   
}
    .menu a:hover{
   background-color:black;
    color:white;
}
        
      </style>
      
       
   </head>
   <body>
         
             
    
<div class="menu"><a href="index.php">Home Page</a>

            <a href="#">Registration</a>
            </div>
            
     <div class="sing" >
             <?php
if(isset($_POST['Submit'])){
$a = $_POST['email'];
   $b = $_POST['pass'];
   
   echo $a.' '.$b;
$query="insert into admin(email,pass)values('$a','$b')";
$run=mysqli_query($conn,$query);

if($run){
 header("location:admin_login.php");
   echo'<script type="text/javascript">alert("Data saved")</script>';

}
else{
     echo'<script type="text/javascript">alert("Data not saved")</script>';
echo"error:".mysqli_error($conn);
}
}

?>
     
     
     
     
     
     <form method="post" id="register" action="">
         <h2>ADMIN SINGUP FORM</h2>
        
               <label>Email-Id</label><br>
                            <input type="text" name="email" id="name" placeholder="Enter Your Email" required="" ><br><br>
                             <label>Password</label><br>
                           <input type="text" name="pass" id="name" placeholder="Enter Your Password" required="" ><br>

<br><br>
             <input type="Submit" name="Submit" id="Submit" placeholder="Submit">


     </form>
       </div>
   </body>
       </html>