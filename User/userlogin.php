<?php
echo "kareena wake up";
require("../connection/connection.php");

$conn = OpenCon();
$sql="SELECT * FROM `login` WHERE 1";
$username = "";
$password = "";
$results=mysqli_query($conn, $sql);

if(mysqli_num_rows($results)>0){
$data = mysqli_fetch_array($results);

 ?> <h2> Username: <?php $data["username"]; ?> </h2>


<?php

echo $data["password"];


}

else{
 echo $conn->error;

}
  $conn->close();

?>



<!DOCTYPE html>
<html>
<head>
<title>User Login Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link link rel="stylesheet" href="userlogin.css" />
	  
<body>
  <!--Logo image and also used as the home page button--> 
  <header class="header">
    <img src="img/marks logo.jpeg" alt="logo" width="100px" height="100px">
    <!--h1>MARK's E-REGISTRY</h1-->
    <div class="nav-items">
    <!--Link for the menu tabs-->
    <a class="fa fa-home" href="../Index.html">Home</a>
      <a href="../About/About.html">About Us</a>
      <a href="../Contact us/contact us.html">Contact</a>
      <a href="../Help/Help.html">Help</a>
    </div>
  </header>
  
  <div class="container">
    <div class="loginbox">
       <img src="img/user.jpeg" alt="user" class="center">
        <h1>User Login</h1>
    <form id="form_id" method="post" name="myform" action ="../User Dashboard/Userdashboard.html">
       <label>User ID :</label>
     <input type="text" name="username" id="username"/>

     <label>Password :</label>
     <input type="password" name="password" id="password"/>
     <?php echo '<input type="submit" value="Login" id="submit" onclick="validate()"/>' ?>
    


   </form>

   <script type="text/javascript">  
   var attempt = 3; // Variable to count number of attempts.
   // Below function Executes on click of login button.NN
   function validate(){
   var username = document.getElementById("username").value;
   var password = document.getElementById("password").value;
   if ( username == "user" && password == "user123"){
   alert ("Login successfully");
   //window.location.href = "Userdashboard.html"; // Redirecting to other page.
   window.location.href = "../User Dashboard/Userdashboard.html";
   return false;
   }
   else{
   attempt--;// Decrementing by one.
   alert("Incorrect username or password. You have left "+attempt+" attempt;");
   // Disabling fields after 3 attempts.
   if( attempt == 0){
   document.getElementById("username").disabled = true;
   document.getElementById("password").disabled = true;
   document.getElementById("submit").disabled = true;
   return false;
   }
   }
   }
   Copy
   </script>
   
   
   <script src="script.js"></script>
   </div>
   
</body>
</html>

<?php
?>