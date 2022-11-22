<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fullname = $_POST['fullname'];
        $gender = $_POST['gender'];
        $districtofbirth= $_POST['districtofbirth'];
        $nameofchild= $_POST['nameofchild'];
        $nameofmother = $_POST['nameofmother'];
        $nameoffather = $_POST['nameoffather'];
        $birthday = $_POST['birthday'];
        $postaladdress = $_POST['postaladdress'];
        $witness = $_POST['witness'];

    }

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

    // using sql to create a data entry query
    //$sql = "INSERT INTO contactform_entries (id, fname, lname, email) VALUES ('0', '', '', '')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>