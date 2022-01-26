<?php 
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!--Menu Bar Close Here-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:black;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo/logo2.png"/width="50px"height="50px"style="margin-top:5px;margin-left:0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  class="active"><a href="index.php"title="Home"><i class="fa fa-home">&nbsp;</i>Home</a></li>
        <li><a href="about.php"title="About"><i class="fa fa-user">&nbsp;</i>About </a></li>
		    <li><a href="image gallery.php"title="Portfolio"><i class="fa fa-inr">&nbsp;</i>Portfolio </a></li>
        <li><a href="services.php"title="Services"><i class="fa fa-clone">&nbsp;</i></>Services </a></li>
        <li><a href="contact.php"title="Contact"><i class="fa fa-phone">&nbsp;</i>Contact </a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>
        <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		<?php 
		} ?>
      </ul>
    </div>
  </div>
</nav>  
<style>
  .nav{
     background-color: black;
     position: relative;
  }
  
  .active, .menu-bar ul li:hover{
    background: #fff;
    border-radius: 2px;
  }
</style>

<!--Menu Bar Close Here-->
