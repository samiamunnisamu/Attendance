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





.main{
position:relative;
width:200px;height:200px;
border:2px solid #fff;margin-top:-200px;

transform:translate(200%,200%);
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
margin-left:480px;

}
.flex > div a{

    text-decoration: none;
 background:rgb(153, 0, 204);
font-size:35px;
margin:15px;   
color:white;
border:1px solid;
border-width:35px;


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
            
            </div>

<div class="flex">
<div class="div1"><a href="teacher_info.php">
    TEACHER</a>
</div>
<div class="div2"><a href="student_info.php">
STUDENT</a>
</div>

</div>
</body>
</html>