<?php  
       $fullname =  $_POST['fullname'];
       $gender =  $_POST['gender'];
       $districtofbirth =  $_POST['districtofbirth'];
       $nameofchild =  $_POST['nameofchild'];
       $nameofmother =  $_POST['nameofmother'];
       $nameoffather =  $_POST['nameoffather'];
       $birthdate =  $_POST['birthdate'];
       $postaladdress =  $_POST['postaladdress'];
       $witness =  $_POST['witness'];
       //Database connection
       $conn = new mysqli('localhost','root','','birth_registration');
       if ($conn-> connect_error){
              die('Connection Failed : ' .$conn->connect_error);
       }else{
              $stmt = $conn->prepare("insert into BIRTH REGISTRATION FORM(fullname, gender, districtofbirth, nameofchild,
              nameofmother, nameoffather, birthdate, postaladdress, witness(?, ?, ?, ?, ?, ?, ?, ?, ?, )");
              $stmt->bind_param("ssssssssi",$fullname, $gender, $districtofbirth, $nameofchild, $nameofmother, $nameoffather, $birthdate,
              $postaladdress, $witness);
              $stmt->execute();
              echo "Registration Successfully...";
              $stmt->close();
              $conn->close();
       }
?>     