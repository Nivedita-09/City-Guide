<?php
$name=$_POST["name"];
$address=$_POST["address"];
$Phone=$_POST["Phone"];
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO library(name,address,Phone) VALUES('$name','$address','$Phone')";
if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>