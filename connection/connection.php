
<?php 

function OpenCon()
{

    $host="localhost";
    $password="";
    $user="root";
    $db="test2";
    $conn=new mysqli($host,$user,$password,$db) or die("Connect failed: %s/n".$conn->error);

return $conn;
}
OpenCon(); 

function CloseCon($conn){
$conn->close();


}
?>



