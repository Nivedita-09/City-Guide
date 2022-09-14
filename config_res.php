<?php
$Restaurant_Name=$_POST["Restaurant_Name"];
$Address=$_POST["Address"];
$Phone_number=$_POST["Phone_number"];
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO restraunts(Restaurant_Name, Address, Phone_number) VALUES('$Restaurant_Name','$Address','$Phone_number')";
if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>