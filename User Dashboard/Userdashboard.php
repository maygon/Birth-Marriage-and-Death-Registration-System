<?php $username="";
if(isset($_GET['user']))
{
  $username=$_GET['user'];
}else{
  echo '<script>alert("Your registration has been cancelled")</script>';

  echo '<script> window.location.href="../index/index.html"</script>';

  
}?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="stylesheet.css">
  <script
  src="https://kit.fontawesome.com/64d58efce2.js"
  crossorigin="anonymous"></script>
</head>

<body>

  
  <header class="header">
    <!--Logo image and also used as the home page button--> 
    <a href="../Index/Index.html">
    <img src="img/marks logo.jpeg" alt="logo" width="100px" height="100px">
    <div class="nav-items">
    <!--Link for the menu tabs-->
    <a class="fa fa-home" href="../index/Index.html">Home</a>
      <a href="../About/About.html">About Us</a>
      <!--a href="../Contact us/contact us.html">Contact</a-->
      <a href="../Help/Help.html">Help</a>
    </div>
  


    <a href="../Certificates/certificates.html">
        <button class="deathRegbtn"><b>Certificate Status</b></button>
      </a>
     
  
  </header>


  <div class="title">
    <img src="img/project_name.jpeg">

    <p style="font-size:1.4em"><strong>Hello <?php echo $username?></strong>, please select a type of Registration Form</p>

    <div class="formbtn">
     
      <a href="../Forms/bithregistrationform.html">
        <button class="birthRegbtn"><b>Birth Registration Form</b></button>
      </a>

      <a href="../Forms/marriageregform.html">
        <button class="marriageRegbtn"><b>Marriage Registration Form</b></button>
      </a>

      <a href="../Forms/deathregform.html">
        <button class="deathRegbtn"><b>Death Registration Form</b></button>
      </a>
    </div>

</div>
  
<!--Social media icons and links-->
<footer>
  <div class="social-media">
    <div class="text"><p>Connect with us :</p></div>
    <div class="social-icons">
      <a href="https://www.facebook.com/rgd.jamaica/">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/rgd_jamaica?lang=en">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.instagram.com/rgdjamaica/?hl=en">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://jm.linkedin.com/company/registrar-general's-department">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div><br>
  </div>
</div>   
</footer>

</body>           
</html>

<?php ?>