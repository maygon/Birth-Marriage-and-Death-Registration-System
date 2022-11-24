<?php 

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Manager Dashboard</title>
  <link rel="stylesheet" href="Dashboard.css">

</head>

<body>
 
  
  <header class="header">
    <a href="../index/Index.html">
      <img src="img/marks logo.jpeg" alt="logo" width="100px" height="100px"></a>
    <div class="nav-items">
      <a class="fa fa-home" href="../index/Index.html">Home</a>
      <a href="../About/About.html">About Us</a>
      <!--a href="../Contact us/contact us.html">Contact</a-->
      <a href="../Help/Help.html">Help</a> 
      
    </div>
  </header>

  

  <main>
    <div class="intro">
      <img src="img/project_name.jpeg">
      <div class="title"> 
      <p><text-align ="center"><h2>PLEASE SELECT A REPORT TO GENERATE.</h2>
       </div>

           
    <div class="managerbtn">
     
      <a href="birthreport.html" class="current">
        <button class="genrepbtn">Birth Registration Report</button>
      </a>

      <a href="marriagereport.html" class="current">
        <button class="genrepbtn">Marriage Registration Report </button>
      </a>

      <a href="deathreport.html" class="current">
        <button class="genrepbtn">Death Registration Report</button>
      </a>
	  </div>
	  <br></br>
		<div class="managerbtn">
      <a href="../User/userlogin.html" class="current">
        <button class="exitportbtn">Logout</button>
      </a>
    </div>

</div>
  
</body>           
</html>
<?php ?>