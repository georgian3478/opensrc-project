<!DOCTYPE html>
<html>
    <head>
        <title>school deatils</title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>Affiliation Number</th>
                <th>Pass Percentage</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "adi", "aditya");
            if($conn-> connect_error){
                die("connection failed:". $conn-> connect_error);
            }
            $sql = "SELECT ID,NAME,ADDRESS,af_num,pass_percent from SCHOOl";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>".$row["ID"] ."</td><td>".$row["NAME"] ."</td><td>".$row["ADDRESS"] ."</td><td>".$row["af_num"] ."</td><td>".$row[pass_percent] ."</td></tr>";
                
                }
                echo "</table>";
            }
            else {
                echo "0 results found";
            }
            $conn-> close();
            ?>
        </table>

    </body>
</html>