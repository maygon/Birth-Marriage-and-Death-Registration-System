<?php 
$username="";
if(isset($_GET['user']))
{
  $username=$_GET['user'];
}else{
  echo '<script>alert("You are not logged in")</script>';

  echo '<script> window.location.href="../index/index.html"</script>';

  
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="Dashboard.css">

</head>

<body>
<header class="header">
    <a  href="../index/Index.html">
      <img src="../img/marks logo.jpeg" alt="logo" width="100px" height="100px"></a>
    <div class="nav-items">
      <a class="fa fa-home" href="../index/Index.html">Home</a>
      <a href="../About/About.html">About Us</a>
      <!--a href="../Contact us/contact us.html">Contact</a-->
      <a href="../Help/Help.html">Help</a> 
      
    </div>
  </header>
    
     
    
  </header>	
  <div class="title"> 
    <div  style=" width:100%; text-align:center"><h1>Hello <?php echo $username?></h1> <h1>WELCOME TO MARKS' EREGISTRY ADMIN PORTAL. <br>PLEASE SELECT AN OPTION TO PROCEED</br></h1></div>

    <div class="btn">
     
      <?php echo '<a href="../ADMIN PANEL/manageUsers.php?user='.$username.'"' ?>class="current">
        <button class="btn1"><b>Access User Information</b></button>
      </a>
	  
		<a href="" class="current">
        <button class="btn2"><b>Generate Report</b></button>
      </a>
  
    </div>
	<BR></BR>
<div class="btn">
      <a href="../index/index.html" class="current">
        <button class="btn1"><b>EXIT</b></button>
      </a>
</div>
  
</body>           
</html>

<?php ?>