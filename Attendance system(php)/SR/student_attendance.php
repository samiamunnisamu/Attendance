<?php

session_start();
$conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);

       $dt=$_POST['date'];
       $sec1=$_SESSION['section1'];

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
  <table id="table" border="4">
    <thead >
      <tr>       
       <th scope="col">Student Roll</th>
        <th scope="col">Student Attendance</th>
        <th scope="col">Student Class Section</th>
        <th scope="col">Attendance Date</th>


        
      </tr>
    </thead> 
     
     <tbody style="background-color: white; color: black;">
           <?php
    $query = "select * from atthistory where date='$dt' && section='$sec1' ";
    $query_run = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($query_run)){
        ?>
      
        <tr>
        <td>
             <?php echo $row['id'];?></td>
             <td><?php echo $row['att'];?></td>
              <td><?php echo $row['section'];?></td>
              <td><?php echo $row['date'];?></td>


            
         </tr>
         
 
    
  

         <?php 
    

}

?>
 
        


    

    
             </tbody >  
        </table>
        </body>
    
    </html>