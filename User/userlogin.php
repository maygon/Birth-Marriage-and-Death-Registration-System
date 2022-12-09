<?php

require("../connection/connection.php");

$UserId="";
$password="";

if(isset($_POST["submit"]))
{
  $UserId=$_POST["UserId"];
  $password=$_POST["password"];

  $conn = OpenCon();
$sql="SELECT * FROM `login` where `UserId`='".$UserId."' AND `Password`='".$password."' ";

$results=mysqli_query($conn, $sql);

if(mysqli_num_rows($results)>0){
$data = mysqli_fetch_array($results);

if(($UserId==$data['UserId'])&&($password==$data['Password']))
{
  $sql2="SELECT * FROM `users` where `UserId`='".$UserId."' ";

$results2=mysqli_query($conn, $sql2);

if(mysqli_num_rows($results2)>0){
$data2 = mysqli_fetch_array($results2);

$role=$data2['Role'];
$username=$data2['FirstName']." ".$data2['LastName'];

if($role=="Admin")
{
  //go to admin dashboard
  echo "<script>window.location.href='../Admin Dashboard/AdminDasboard.php?user=".$username."'</script>";
}else if ($role=="User")
{
  //go to user page
  echo "<script>window.location.href='../User Dashboard/Userdashboard.php?user=".$username."'</script>";

}else if ($role=="Manager")
{
  //go to Manager page
  echo "<script>window.location.href='../Manager/ManagersDashboard.php?user=".$username."'</script>";
}

}

}

else{
 echo "<script>alert('Invalid Username or Password')</script>";


}
  $conn->close();


}
else{

  echo "<script>alert('Invalid Username or Password')</script>";
}

}

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
    <a href="../index/Index.html"> <img src="img/marks logo.jpeg" alt="logo" width="100px" height="100px"></a>
    <!--h1>MARK's E-REGISTRY</h1-->
    <div class="nav-items">
    <!--Link for the menu tabs-->
    <a class="fa fa-home" href="../index/Index.html">Home</a>
      <a href="../About/About.html">About Us</a>

      <a href="../Help/Help.html">Help</a>
      <a class="fa fa-sign-out" href="../index/Index.html"></a>
  
    </div>
  </header>
  
  <div class="container">
    <div class="loginbox">
       <img src="img/user.jpeg" alt="user" class="center">
        <h1>User Login</h1>
    <form id="form_id" method="post" name="myform" action ="userlogin.php">
       <label>User ID :</label>
     <input type="text" name="UserId" id="UserId"/>

     <label>Password :</label>
     <input type="password" name="password" id="password"/>
     <?php echo '<input type="submit" value="Login" name="submit" id="submit" "/>' ?>
    


   </form>

   <script type="text/javascript">  
   var attempt = 3; // Variable to count number of attempts.
   // Below function Executes on click of login button.NN
   function validate(){
   var username = document.getElementById("username").value;
   var password = document.getElementById("password").value;
   if ( username == "UserId" && password == "password"){
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