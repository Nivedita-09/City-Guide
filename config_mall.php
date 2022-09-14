<?php
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO mall(name, address, phone) VALUES('$name','$address','$phone')";
if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>