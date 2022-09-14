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
                height: 750px;
                padding-top: 50px;
                padding-left: 200px;
                padding-bottom: 10px;
                background-image: url("https://im1.dineout.co.in/images/uploads/restaurant/sharpen/2/e/d/p29410-15743151555dd62493bdda1.jpg?tr=tr:n-xlarge");
                background-size: cover;

            }
        </style>
        <body>
            <div class="container">
                <table class="container-1">
                    <tr>
                    <th>Restraunt Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    </tr>
                    <?php
                    $conn=mysqli_connect("localhost","root","","std");
                    if($conn->connect_error){
                        die("Connection failed");
                    }
                    $sql="SELECT Restaurant_Name, Address, Phone_number from restraunts";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<tr><td>".$row["Restaurant_Name"]."</td><td>".$row["Address"]."</td><td>".$row["Phone_number"]."</td></tr>";

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