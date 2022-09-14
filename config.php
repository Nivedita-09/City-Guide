<?php
$name=$_POST["name"];
$address=$_POST["address"];
$website=mysql_real_escape_string($_POST["website"]);
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO stdname(name,address,website) VALUES('$name','$address','$website')";

if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>