<?php


$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

?>
<html>
<head>
<style>
body{
    background:rgb(242, 204, 255);


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
  color: white;
}
</style>
</head>
  <body>

  <center><h1 >Online Student Attendance Systems</h1></center>
<hr>

 </form>    
  <table id="table" border="3">
    <thead >
      <tr>       
        <th scope="col">Student Name</th>
        <th scope="col">Student Roll</th>
        <th scope="col">Student Class(Section)</th>
       

        
      </tr>
    </thead> 
     
     <tbody style="background-color: white; color: black;">
           <?php
    $query = "select * from student";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){
        ?>
      
        <tr>
        
            
             <td><?php echo $row['student_name'];?></td>
             <td><?php echo $row['student_roll'];?></td>
              <td><?php echo $row['student_section'];?></td>
            
         </tr>
         
 
    
  

         <?php 
    

}

?>
 
        


    

    
             </tbody >  
        </table>
        </body>
    
    </html>