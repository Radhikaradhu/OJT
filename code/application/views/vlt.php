<html>
<head> <h1>STUDENT MANAGEMENT SYSTEM:-Teachers</h1>
<title> 
</title>
<style>
	.bi
{
	background-image:url("../img/4.jpg");
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



</style>
</head>
<body >
<body class="bi">
<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>main/vls">Home</a></li>
<li><a href="<?php echo base_url()?>main/formdata">View students</a>
<li><a href="<?php echo base_url()?>main/notis">View Notification</a>
</li>
<li><a href="<?php echo base_url()?>main/notification">Add Notification</a></li>
<li><a href="<?php echo base_url()?>main/index">logout</a></li>
</ul>
</nav>							
</div>
</body>
</html>