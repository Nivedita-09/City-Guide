<html>
<head>
        <style type="text/css">
        *{
            margin: 0px;
        }
         table{
                font-family: Arial, Helvetica, sans-serif;
                border:5px solid black;
                width: 80%;
                padding: 8px;
                color: cyan;
            }
            th{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #111;
                color: white;

            }
            .container-1{
                background-color: rgba(0, 0, 0, 0.514);
            }
            .container{
                height: 650px;
                padding-top: 50px;
                padding-left: 200px;
                padding-bottom: 10px;
                background-image: url("https://media.istockphoto.com/photos/downtown-cleveland-hotel-entrance-and-waiting-taxi-cab-picture-id472899538?b=1&k=20&m=472899538&s=170667a&w=0&h=oGDM26vWKgcKA3ARp2da-H4St2dMEhJg23TTBeJgPDE=");
                background-size: cover;

            }
        </style>
</head>
        <body>
        <div class="container">
            <table class="container-1">
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
            $sql="SELECT Hotel_Name, Address, Phone_number from hotels";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["Hotel_Name"]."</td><td>".$row["Address"]."</td><td>".$row["Phone_number"]."</td></tr>";

                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn->close();
            ?>
            </table>
        </div>
        </body>
        </html>