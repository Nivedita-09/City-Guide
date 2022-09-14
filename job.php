<head>
        <style type="text/css">
        table{
            font-family: Arial, Helvetica, sans-serif;
            border:1px solid black;
            width: 100%;
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
        <th>Phone Number</th>
    
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","std");
        if($conn->connect_error){
            die("Connection failed");
        }
        $sql="SELECT Name, Address, Phone from industries";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Phone"]."</td></tr>";

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
        
        