<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<style>
*{
padding:0px;
margin:0px;
}

.menubar
    {
background-color:rgba(0,0,0,0.7);
text-align:center;
}
.menubar ul
    {
list-style:none;
display:inline-flex;
padding:5px;
    }
.menubar ul li a
    {
text-decoration:none;
color:white;
padding:20px;
  font-weight:bolder;

    }
.menubar ul li a:hover
    {
background-color:green;
border-radius:10px;
    }
.menubar li
    {

padding:15px;
    }
.submenu1,.submenu2,.submenu3
    {
display:none;
    }
.menubar li:hover .submenu1
    {
display:block;
position:absolute;
background-color:rgba(0,0,0,0.7);
border-radius:10px;
    }
.submenu1 ul
    {
display:block;
    }
.submenu1 ul li a
    {
border-bottom:2px solid green;
    }
.menubar li:hover .submenu2
    {
display:block;
position:absolute;
background-color:rgba(0,0,0,0.7);
border-radius:10px;
    }
.submenu2 ul
    {
display:block;
    }
.submenu2 ul li a
    {
border-bottom:2px solid green;
    }
 .menubar li:hover .submenu3
    {
  display:block;
  position:absolute;
  background-color:rgba(0,0,0,0.7);
  border-radius:10px;
    }
.submenu3 ul
    {
  display:block;
    }
.submenu3 ul li a
    {
  border-bottom:2px solid green;
    }

body{
  background-image:url("../img/1.jpg");
background-size:cover;
}
.head{
text-align:center;
color: white;
}
</style>
</head>
<body>
<nav class="menubar">
       <ul>
           <li><a href="#">Home</a></li>
           <li><a href="#">profile</a>
                <div class="submenu1">
                  <ul>
                    <li><a href="<?php echo base_url()?>main/register">Create</a></li>
                    <li><a href="<?php echo base_url()?>main/updatefrm">update</a></li>
                  </ul>
                </div></li>
           <li><a href="#">View</a>
               <div class="submenu2">
                   <ul>
                      <li><a href="#">Leave Status</a></li>
                      <li><a href="#">Assigned Load</a></li>
                   </ul>
               </div>
           </li>
           <li><a href="#">Manage Leave</a>
               <div class="submenu3">
                   <ul>
                      <li><a href="#">Leave Application</a></li>
                      <li><a href="#">Leave Approval</a></li>
                   </ul>
               </div>
           </li>
        <ul>
           <li><a href="#">Load</a></li>
       </ul>
   </nav>
<div class="head">
<h1><i>"Your walls are a reflection of your personality"</i></h1>
</div>
</body>
</html>

