<?php
$name=$_POST["name"];
$address=$_POST["address"];
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO petrol_pump(name, address) VALUES('$name','$address')";
if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>