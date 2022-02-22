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
background:rgb(242, 204, 255);
	
	position:relative;
}


.main{
margin:auto;
width:200px;
display:inline-block;
border:2px solid #fff;
transform:translate(200%,200%);
}

.main1{
margin:auto;
width:200px;
display:inline-block;
border:2px solid #fff;
transform:translate(200%,200%);
}

.main1 ul li:hover{
background-color:#fff;
color:#000;
}

.main2{
margin:auto;
width:200px;
display:inline-block;
border:2px solid #fff;
transform:translate(200%,200%);
}

.main2 ul li:hover{
background-color:#fff;
color:#000;
}

.menu{
	
	 width: 40%;
        margin: 0px;
    display: inline-block;
	

    
}
 .menu a{
 float:left;
    width: 25%;
	padding:5px 20px; 
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
.flex{
    display:flex;
margin-top:200px;
margin-left:260px;

}
.flex > div a{
    border:1px solid;
    border-width:30px;
    text-decoration: none;
 background:rgb(153, 0, 204);
font-size:35px;
margin:15px;   
color:white;



}
.flex > div a:hover{
    background:rgb(223, 128, 255);
font-size:35px;
margin:15px;   
color:blue;
list-style-type:none;   
   

}

</style>
</head>

<body>
<div class="menu"><a href="index.php">Home Page</a>
             <a href="view_admin.php">Previous Page</a>
             </div>
             <div class="flex">
<div class="div1"><a href="student_singup.php">
  ADD STUDENT</a>
</div>
<div class="div2"><a href="student_remove.php">
REMOVE STUDENT</a>
</div>
<div class="div3"><a href="student_details.php">
 STUDENT DETAILS</a>
</div>
</div>



</body>
</html>