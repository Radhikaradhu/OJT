<html>
<head>

<title> TEACHER  </title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->

</head>
<style>
	nav{
		font-size: 20px;
		background-color: rgba(0,0,0,0.8);
		
		text-align: center;
		
	}
	body{
  background-image:url("img/4.jpg");
background-size:cover;
}

.menubar ul{
	list-style:none;
	display:inline-flex;
	padding:5px;
	margin-top: 0px;
	font-size: 20px;
}
.menubar ul li a{
	color:white;
	text-decoration:none;
	padding:10px;
}
.menubar ul li{
     padding:15px;
}
.menubar ul li a:hover{
	background-color:red;
	display:block;
	border-radius:10px;
}
.submenu1 {
	display:none;
	margin:10px;
}
.submenu2 {
	display:none;
	margin:10px;
}
.menubar ul li:hover .submenu1 {
	display:block;
	position:absolute;
	background-color:rgba(0,0,0,0.5);
	border-radius:20px;
}
.menubar ul li:hover .submenu2 {
	display:block;
	position:absolute;
	background-color:rgba(0,0,0,0.5);
	border-radius:20px;
}
.submenu1  ul{
	display:block;
}
.submenu1 ul li{
	border-bottom:2px solid red;
}
.submenu2  ul{
	display:block;
}
.submenu2 ul li{
	border-bottom:2px solid red;
}
.h2
{
	text-align: center;
	margin-top: 20px;
	font-size: 50px;
	
}
.head{
text-align:center;
color: black;
}
</style>

<body class="bi ">
	
<nav class="menubar">
	<nav class=" navbar navbar-expand-lg top1">
	<div class="container-fluid">
		<a class="text-decoration-none text-white" href="#"><h1>Teacher</h1></a>
		<div>
			<ul class="navbar-nav">
				<li class="nav-item"> <a class="nav-link" href="#">Home</a></li>
				<li class="nav-item"> <a class="nav-link" href="#">Add</a>
					<div class="submenu1">
		<ul>
				<li class="nav-item"> <a class="nav-link" href="mark.php">Mark</a></li>
				<li class="nav-item"> <a class="nav-link" href="attendance.php">Attendance</a></li>
			</ul>

		<li class="nav-item"> <a class="nav-link"href="#">view</a>
<div class="submenu2">
		<ul>
		
			<li class="nav-item"> <a class="nav-link" href="viewnotif.php">Notifications</a></li>
			
			
		</ul>
</div>
<li class="nav-item"> <a class="nav-link" href="tupdate.php">Updation</a></li>
			
		
		<li class="nav-item"> <a class="nav-link" href="index.php">logout</a></li>
		
</ul>
				
			</ul>
		</div>
	</div>
</nav>
</div>
</nav>
<div class="head">
<h1><i>"Teaching kids to count is fine, but teaching them what counts is best."</i></h1>

  


<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">

</script>

</body>
</html>