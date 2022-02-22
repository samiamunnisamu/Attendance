<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style>
body{
margin:0;
padding:0;
font-family:Century Gothic;
	position:relative;
    
    background:rgb(153, 0, 204);
  
}

header{

height:100vh;
background-size:cover;
background-position:center;
}

ul{
float:right;
list-style-type:none;
margin-top:25px;
}

ul li{
display:inline-block;
}

ul li a{
text-decoration:none;
color:#fff;
padding:5px 20px;
border:1px solid #fff;
transition:0.6s ease;
}



ul li a:hover{
background-color:#fff;
color:#000;
}

ul li.active a{
background-color:#fff;
color:#000;
}

.main{
max-width:1200px;
margin:auto;
}

.title{ margin-left:80px;
position:absolute;
top:60%;
left:40%;
transform:translate(-50%,-50%);

}

.title h1{
color:white;

font-size:40px;
margin-top:500px;
font-style:italic;
}

.title h6{margin-left:50px;
color:#fff;
font-size:30px;
text-align:center;
}

.button{
position:absolute;
top:80%;
left:40%;
transform:translate(-50%,-50%);
}

.btn{
border:1px solid #fff;
padding:10px 30px;
color:#fff;
margin-left:180px;
text-decoration:none;
transition:0.6s ease;
}

.btn:hover{
background-color:#fff;
color:#000;
}



</style>

</head>

<body>



<div class="main">
<ul>
<li class="active"><a href="#">HOME PAGE</a></li>
<li><a href="admin_login.php">ADMIN</a></li>
<li><a href="teacher_login.php">TEACHER</a></li>

</ul>

</div>
<div class="title">
<h1>Online Student Attendance System</h1>


</div>


</body>
</html>