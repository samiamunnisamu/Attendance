<?php


$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

?>
<html>
<head>

<style>
body{  background:rgb(242, 204, 255);
}

h1{  margin-top:20px;
    font-weight: bold;
    font-size:35px;
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
#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:  purple;
}
</style>
</head>
  <body>

  <center><h1 >Online Student Attendance Systems</h1></center>
<hr>

 </form>    
  <table id="table" border="6">
    <thead >
      <tr>       
       <th scope="col">Teacher ID</th>
        <th scope="col">Teacher Name</th>
        <th scope="col">Teacher Email</th>
        <th scope="col">Teacher Class</th>
        <th scope="col">Teacher Course</th>
        <th scope="col">Teacher Joining Date</th>


        
      </tr>
    </thead> 
     
     <tbody style="background-color: white; color: black;">
           <?php
    $query = "select * from teacher ";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){
        ?>
      
        <tr>
        <td>
             <?php echo $row['teacher_id'];?></td>
             <td><?php echo $row['teacher_name'];?></td>
             <td><?php echo $row['teacher_email'];?></td>
              <td><?php echo $row['teacher_section'];?></td>
              <td><?php echo $row['teacher_course'];?></td>
              <td><?php echo $row['joining_date'];?></td>

            
         </tr>
         
 
    
  

         <?php 
    

}

?>
 
        


    

    
             </tbody >  
        </table>
        </body>
    
    </html>