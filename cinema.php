<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="config.php">
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
                background-image: url("https://britishcinematographer.co.uk/wp-content/uploads/bb-plugin/cache/twitter-and-firstlook-onscreen-landscape.jpg");
                background-size: cover;

            }
        </style>
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
                    $sql="SELECT name,address,Phone from cinema";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<tr><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["Phone"]."</td><td>";

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