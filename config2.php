<?php
$name=$_POST["name"];
$address=$_POST["address"];
$link=$_POST["link"];
$conn=new mysqli('localhost','root','','std');
$sql="INSERT INTO jclg(name,address,link) VALUES('$name','$address','$link')";
if ($conn->query($sql)===TRUE){
    echo "Data inserted";
}
else{
    echo "Error";
}
?>