<?php
$Hotel_Name=$_POST["Hotel_Name"];
$Address=$_POST["Address"];
$Phone_number=$_POST["Phone_number"];
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO hotels(Hotel_Name, Address, Phone_number) VALUES('$Hotel_Name','$Address','$Phone_number')";
if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>