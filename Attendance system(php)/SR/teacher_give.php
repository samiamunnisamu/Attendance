<?php
session_start();

$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);


?>
<html>
<head>
<style>
body{

  background:rgb(242, 204, 255);

}
.samia{ text-align:center;

width: 250px; 
height: 30px; 
background-color:white;
margin-top:2%;
margin-left:70%;


} 

.fateha{ text-align:center;
    color:white;
background-color:#cc3300;
height:25p%;
width:10%;
font-size:14px;                   
font-family: sans-serif;
margin-top:4px;
margin-left: 75%;
padding:10px;
border: 1px solid;
border-radius:6px;
}

#table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
}
#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}
#table tr:nth-child(even){background-color: #f2f2f2;}
#table tr:hover {background-color: #ddd;}
#table th { padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  purple;
}
h1{  margin-top:20px;
    font-weight: bold;
    font-size:35px;
}

</style>
 
</head>
  <body>
  <center><h1 >Online Student Attendance Systems</h1></center>
<hr>
  
 </form>    
  <table id="table" border="5">
    <thead >
      <tr>       

        <th scope="col">Student Name</th>
        <th scope="col">Student Roll</th>
        <th scope="col">Student Section</th>
        <th scope="col">Present</th>
        <th scope="col">Absent</th>
    


        
      </tr>
    </thead> 
     
     <tbody style="background-color: white; color: black;">
           <?php
              $ss=$_SESSION['section1'];
              $query = "select * from student where student_section='$ss' ";
              
    
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){
        ?>
      
        <tr>
        
             <td><?php echo $row['student_name'];?></td>
             <td><?php echo $row['student_roll'];?></td>
              <td><?php echo $row['student_section'];?></td>
              <td>  <form method="post">
            <a href="give1.php?id=<?php echo $row['student_roll'] ?>"> <p>present</p>  </a>
           </form>
           
              </td>
              <td>  <form method="post">
            <a href="give2.php?id2=<?php echo $row['student_roll'] ?>"> <p>absent</p>  </a>
           </form>
           
              </td>


         </tr>
         
 
    
  

         <?php 
    

}

?>





 
             </tbody >  
        </table>

        <form method="post" action="student_attendance.php" >
<h2>View Attendance history of :</h2>



 
 <input type="Date" name="date"class="input-field"></div><br>

<input type="Submit" placeholder="Submit" name="Submit" id="Submit">

</form>
        </body>
    
    </html>