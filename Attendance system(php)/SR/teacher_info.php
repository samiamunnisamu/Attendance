<!DOCTYPE html>
<html>
<head>
<title>officers</title>
<style>
body{
margin:0;
padding:0;
font-family:Century Gothic;
font-family:Century Gothic;
position:relative;
background:rgb(242, 204, 255);

}
.flex{
    display:flex;
margin-top:200px;
margin-left:95px;

}
.flex > div a{
    background:rgb(153, 0, 204);
font-size:35px;
margin:15px;
color:white;
text-decoration:none;
border:1px solid;
border-width:20px;

}
.flex > div a:hover{
    background:rgb(223, 128, 255);
color:blue;
}

.menu{
   
   width: 30%;
      margin-top: 60px;
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

 


</style>
</head>

<body>
<div class="menu">
               <a href="index.php">Home Page</a>
               <a href="view_admin.php">Previous Page</a>

            </div>
            
   
<div class="flex">
<div class="div1"><a href="teacher_singup.php">
  ADD TEACHERS</a>
</div>
<div class="div2"><a href="teacher_remove.php">
REMOVE TEACHERS</a>
</div>
<div class="div3"><a href="teacher_details.php">
 TEACHERS DETAILS</a>
</div>
</div>
</body>
</html>