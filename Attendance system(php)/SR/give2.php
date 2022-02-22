<?php

session_start();
 $conn=mysqli_connect("localhost", "root","","attendance2") or die ($conn->errno);
    $id1=$_GET['id2'];
    $sec1=$_SESSION['section1'];
    $date1=$_SESSION['date1'];
    $result=mysqli_query($conn,"update student set present=present+1 where student_roll ='$id1'  ");
    mysqli_query($conn,$result);
    $result1=mysqli_query($conn,"insert into atthistory (id,att,date,section) values ('$id1','absent','$date1','$sec1')");
    mysqli_query($conn,$result1);
    echo($id1);
    header("location:teacher_give.php");
?>