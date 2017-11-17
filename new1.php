<!DOCTYPE html>
<html>
    <head>
        <title>school deatils</title>
    </head>
    <div class="main_wrapper">
    <div class="header_wrapper">
        <!-- 1.1:header area start -->
        <div id="b">
        <h1 style="background-color: white">
            <a href="home.php">SCHOOL</a></h1><small style="color:orange">Management System</small>
        </div>
            <!-- creating form start-->
        <!-- 1.1:End -->
        <div class="f1">
        <form method="get" action="results.php" enctype="multipart/form-data" style="float: left" >
            <input type="text" name="Search" style="width: 500px; height:35px;border-color:red">
            <input type="submit" name="submit" value="Search" style="height:40px;width:80px;background-color: red">
        </form>
        </div>
    </div>
    <div id="navbar">
        <!-- 1.2:Navigation Area start -->
        <ul id="menu"/>
            <li><a href="home.php">Home</a></li>
            <li><a href="admin.php">filtersearch 1</a></li>
            <li><a href="#">filtersearch 2</a></li>
            <li><a href="#">filtersearch 3</a></li>
            <li><a href="#">filtersearch 4</a></li>
            <li><a href="#">filtersearch 5</a></li>
            

        </li>

        <!-- 1.2:End -->
    </div>
    <div class="contant_wrapper">
        <!-- 1.3:Contant Area start -->
        <div id="right_contant">
            <div id="headline">
                <div id="headline_content">
                    <b></b>
                    <b style="color: grey;"></b>
                    <span></span>
                </div>
            </div>
            <div id="product_box">
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>Affiliation Number</th>
                <th>Pass Percentage</th>
            </tr>
            <div class="contant_wrapper">
        <!-- 1.3:Contant Area start -->
        <div id="right_contant">
            <div id="headline">
                <div id="headline_content">
                    <b></b>
                    <b style="color: grey;"></b>
                    <span></span>
                </div>
            </div>
            <div id="product_box">
            <?php
            $conn = mysqli_connect("localhost", "root", "adi", "aditya");
            if($conn-> connect_error){
                die("connection failed:". $conn-> mysqli_connect_error);
            }
            $sql = "SELECT * from SCHOOl";
            $result = $mysqli_query($conn,$sql);

            if($result-> num_rows > 0){
                while ($row = mysqli_fetch_array($result)){
                    $id =$row_SCHOOl['ID'];
                    $name =$row_SCHOOl['NAME'];
                    $address =$row_SCHOOl['ADDRESS'];
                    $Affiliation_Number =$row_SCHOOl['af_num'];
                    $Pass_Percentage =$row_SCHOOl['pass_percent'];
                
                }
                echo "</table>";
            }
            else {
                echo "0 results found";
            }
            $mysqli_close($conn);
            ?>
        </table>

    </body>
</html>