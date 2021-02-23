<html>
<head> <h1>STUDENT MANAGEMENT SYSTEM</h1>
<title> 
</title>
<style>
	.bi
{
	background-image:url("../img/2.jpg");
	background-size:cover;
}
	.menubar
{
	background-color:black;
	text-align:center;
	

}
.menubar ul
{
list-style:none;
display:inline-flex;
padding:15px;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
	padding:10px;
}
.menubar ul li
{
padding:15px;
}
.menubar ul li a:hover
{
	background-color:red;
	border-radius:10px;
}
.submenu
{
	display:none
}
.menubar ul li:hover .submenu
{
	display:block;
	position:absolute;
	background-color:black;
	border-radius:10px;
	margin-left:20px;
}
.submenu ul
{
	display:block;
}
.submenu ul li
{
	border-bottom:1px solid red;
	
}
</style>
</head>
<body>
<body class="bi">
<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/index">Home</a></li>
<li><a href="#">Register</a>
<div class="submenu">
<ul>
	<li><a href="<?php echo base_url()?>main/regview">Student</a></li>
	<li><a href="<?php echo base_url()?>main/teacherview">Teacher</a></li>
</ul>
</div>
</li>
<li><a href="<?php echo base_url()?>main/studlog">Login</a></li>
</ul>
</nav>							
</div>
</body>
</html>