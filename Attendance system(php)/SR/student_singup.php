



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
         body{
               font-family: tahoma,geneva,sans-serif;
               background:rgb(242, 204, 255);

         }
        h2{
        text-align:center;
       padding:20px;
       }
      
      
     .sing { 
      background:rgb(153, 0, 204);
          width: 500px; height: 350px;
          color:white;
          font-size: 18px;
         padding: 10px;
         margin-left:450px;
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
             width: 300px;
             border: none;
             border-radius: 3px;
             outline: 0px;
             padding: 7px;
         }
         #Submit{
          width: 300px;
             border: none;
             border-radius: 3px;
             outline: 0px;
             padding: 7px;
             font-size: 20px;

}

#Submit:hover{background-color:#00b894;}

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
            <a href="student_info.php">Previous Page</a>
            </div>
            
     <div class="sing" >
             <?php
if(isset($_POST['Submit'])){
$u_name = $_POST['student_name'];
$u_id = $_POST['student_roll'];
   $u_pass = $_POST['student_section'];
    
      
   
  // echo $u_name.' '.$u_id.' '.$u_pass.' '.$u_addr.' '.$u_email;
$query="insert into student(student_name,student_roll,student_section)values('$u_name','$u_id','$u_pass')";
$run=mysqli_query($conn,$query);

if($run){
 //header("location:student_login.php");
   echo'<script type="text/javascript">alert("Data saved")</script>';

}
else{
     echo'<script type="text/javascript">alert("Data not saved")</script>';
echo"error:".mysqli_error($conn);
}
}

?>
     
     
     
     
     
     
     
     <form method="post" id="register" action="">
         <h2>Add Student</h2>
         <label>Full Name</label><br>
          <input type="text" name="student_name" id="name" placeholder="Enter Student full name" required="" ><br>

                 <label>Roll Number</label><br>
                              <input type="text" name="student_roll" id="name" placeholder="Enter Student Roll" required="" ><br>

                   <label>Class Section</label><br>
                   <select id="name" name="student_section">
                                <option value="10-A">Class and Section</option>   

                  <option value="10-A">10-A</option>   
                  <option value="10-B">10-B</option> 
				  <option value="11-A">11-A</option>
				  <option value="11-B">11-B</option>
				  <option value="12-A">12-A</option>
				  <option value="12-B">12-B</option>
              </select> <br>                               
                         <br>
                                    
         <a href="#"><input type="Submit" name="Submit" id="Submit" placeholder="Submit"></a>


     </form>
       </div>


   </body>

   
       </html>