



<?php


$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

?>
  
   
  <html>
   <head>
     <title>sign up</title>  
     <style> 
     *{
       margin:0;
       padding:0;
       
       
       } 
         body{background:rgb(242, 204, 255);
               font-family: tahoma,geneva,sans-serif;
         
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
         margin-left:450px;
         margin-top:80px;
         
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
             width: 300px;
             border: none;
             border-radius: 3px;
             outline: 0px;
             padding: 7px;
         }
         #Submit{
margin:10px;
padding:10px;
font-size:20px;
border:none;
outline:none;
background-color:#fff;
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
            <a href="">Registration</a>
            </div>
            
     <div class="sing" >
             <?php
if(isset($_POST['Submit'])){
$u_name = $_POST['teacher_name'];
$u_id = $_POST['teacher_password'];
   $u_pass = $_POST['teacher_section'];
   $u_addr = $_POST['teacher_course'];
   $u_email = $_POST['teacher_email'];
  
      
   
  // echo $u_name.' '.$u_id.' '.$u_pass.' '.$u_addr.' '.$u_email;
$query="insert into teacher(teacher_name,teacher_password,teacher_section,teacher_course,teacher_email)values('$u_name','$u_id','$u_pass','$u_addr','$u_email')";
$run=mysqli_query($conn,$query);

if($run){
 //header("location:teacher_login.php");
   echo'<script type="text/javascript">alert("Data saved")</script>';

}
else{
     echo'<script type="text/javascript">alert("Data not saved")</script>';
echo"error:".mysqli_error($conn);
}
}

?>
     
     
     
     
     
     
     
     <form method="post" id="register" action="">
         <h2>Add Teacher</h2>
         <label>Full Name</label><br>
          <input type="text" name="teacher_name" id="name" placeholder="enter your full name" required="" ><br>

                 <label>Password</label><br>
                              <input type="text" name="teacher_password" id="name" placeholder="enter your password 8 character minimum" required="" ><br>

                   <label>class section</label><br>
                                <select id="name" name="teacher_section">
                                <option value="10-A">Class and Section</option>   

                  <option value="10-A">10-A</option>   
                  <option value="10-B">10-B</option>
				  <option value="11-A">11-A</option>
				  <option value="11-B">11-B</option>
				  <option value="12-A">12-A</option>
				  <option value="12-B">12-B</option>
              </select> <br>
                                <label>course</label><br>
                          <input type="text" name="teacher_course" id="name" placeholder="enter your Course name" required="" ><br>
                          <label>Email</label><br>
                          <input type="text" name="teacher_email" id="name" placeholder="enter your Email" required="" ><br>

                                    
         <a href="user.php"><input type="Submit" name="Submit" id="Submit" placeholder="Submit"></a>


     </form>
       </div>


   </body>

   
       </html>