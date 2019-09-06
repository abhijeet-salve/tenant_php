<html>
<head> <title>Tenant-Find a home to rent!</title> 
<link rel = "stylesheet" type = "text/css" href="">
<script type="text/javascript" src="script.js"></script>
<style>

.login
{
    border: antiquewhite;
    margin-left: 203px;

}

body, html {
    height: 100%;
}

.content
{
    height: 300px;
    background-image: url("images/lgb2.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	margin-top:1px;	
}
body
{
 margin: -1px -2px;
}
div.header
{
	background-color: rgba(247, 247, 247, 0.96);
    height: 51px;
    width: 100%;
}
div.image
{
 margin-top:1px;
 float:left;
 }
 div.title
{
 margin-top:1px;
 float:left;
 }
div.menu
{
    margin-top: -33px;
    float: right;
    font-size: 17px;
}

div.title h2
{
    margin-top: 1px;
    margin-bottom: -13px;
    margin-left: 12px;
    font-size: 37px;
    font-family: serif;
    font-variant-caps: all-small-caps;
    letter-spacing: 4px;
}

div.title h3
{
margin-left: 94px;
    display: inline;
    font-size: 12px;
    font-family: cursive;
    color: indigo;
    padding: 49px;
}
.image
{
 float:left;
     margin-top: 12px;
    margin-left: 16px;
}

div.image img
{ 
margin-top:1px;
}
a
{
 text-decoration:none;
 color: darkblue;
}

a:hover
{
 color:black;
}

.pbutton
{
     background-color: #88857e;
    border: none;
    color: white;
    padding: 0px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 52px 1px;
    cursor: pointer;

}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.log
{
     background-color: rgba(50, 50, 50, 0.41);
    text-align: center;
	width:400px;
	}

</style>
</head>
<body>

<div class="header">
	<img class="image" src="images/logom.png" alt="Tenant-logo" height="40px" width="40px">
	<div class="title">
	<a href="index.html" style="color:black;"><h2>TenanT</h2></a>
	
	<a href="index.html"><h3> Rent "Home Sweet Home"</h3></a>
	 </div>
	
	<div class="menu"> 
  <div style="letter-spacing:1px; margin:14px;">
	  <a class="pbutton" href="PA.html"> Post a Ad </a>&nbsp;
	  <a href="index.html">| Home |</a>&nbsp;
	  <a href="about.html">| About Us |</a>&nbsp;
      <a href="search.html">| Search Property |</a>&nbsp; 	
        <div class="dropdown">
  <span>| Contact | &nbsp;</span>
  <div class="dropdown-content">
    <p style="font-size:15px">Phone: 9405222929 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7588239173<br>
	Email: c@tenant.in</p>
	</div>
  </div>
      <a href="login.php">| Log in |</a>&nbsp;
       <a href="regis.php">| Sign up |</a>
    </div>
</div>
	</div>
	
</div>
<?php
  $uname=$_POST['uname'];
  $pass=$_POST['p'];
  
  ?>
<div class="content">
<div="scroll">
	<div class="login">
	<br><br><br><br><br><br>
	<div class="log">
	<h1 style="color:white; letter-spacing:3px; margin-top:5px">LOGIN</h1><br><br>
	<p style="color:white; font-size:20px;">
	<form action="#" method="POST">
	Username:  <input type="textbox" name="uname"><br><br>
<p style="color:white; font-size:20px;">Password:  <input type="password" name="p"><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<input type="button" value=Login>
&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="button" value=Cancel>
	</form>
</div>
	</div>		
</div>
</div>
</body>
</html>












