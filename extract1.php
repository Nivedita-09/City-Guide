<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="config.php">
        <style type="text/css">
        table{
            font-family: Arial, Helvetica, sans-serif;
            border:1px solid black;
            width: 50%;
            border: 5px solid black;
            padding: 8px;
        }
        th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        
        }
        </style>
        <body>
        <table>
            <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Link</th>
            </tr>
            <?php
            $conn=mysqli_connect("localhost","root","","std");
            if($conn->connect_error){
                die("Connection failed");
            }
            $sql="SELECT name,address,link from stdname1";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["link"]."</td></tr>";

                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn->close();
            ?>
        </table>
        </body>
        </html>
        
        