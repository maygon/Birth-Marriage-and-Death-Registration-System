<?php
require("../connection/connection.php");
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $registrationId = $_POST['BirthID'];
        echo $registrationId;
        $fullname = $_POST['firstname']." ".$_POST['lastname'];
        echo $fullname;
        $gender = $_POST['gender'];
        echo $gender;
       $dateofreg= $_POST['DateofRegistration'];


    }
/*
    // database details
    $host = "localhost";
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $districtofbirth= $_POST['districtofbirth'];
    $nameofchild= $_POST['nameofchild'];
    $nameofmother = $_POST['nameofmother'];
    $nameoffather = $_POST['nameoffather'];
    $birthday = $_POST['birthday'];
    $postaladdress = $_POST['postaladdress'];
    $witness = $_POST['witness'];

    // creating a connection  $nameofchild, $nameofmother,$nameoffather, $postaladdress, $birthday, $witness
    $con = mysqli_connect($host, $username, $password, 
    $fullname, $gender, $districtofbirth, 
   );

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query*/
$con = OpenCon();
$sql1 = "INSERT INTO `registration`(`RegistrationId`, `PersonId`, `Type`, `DateOfRegistration`) VALUES ('".$registrationId."','8752','Birth','".$dateofreg."')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql1);
    if($rs)
    {
        echo "Entries added!";
    }
    
$sql2 = "INSERT INTO `registration`(`RegistrationId`, `PersonId`, `Type`, `DateOfRegistration`) VALUES ('".$registrationId."','8752','Birth','".$dateofreg."')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql2);
    if($rs)
    {
        echo "Entries added!";
    }
    // close connection
    mysqli_close($con);

?>