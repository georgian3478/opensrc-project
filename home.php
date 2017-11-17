<?php
include("Database.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"charset="utf-8">
    <title>SCHOOL</title>
    <link rel="stylesheet" href="style.css" media="all">
</head>
<!-- 1:main header area start -->
<div class="main_wrapper">
    <div class="header_wrapper">
        <!-- 1.1:header area start -->
        <div id="b">
        <h1 style="background-color: white">
            <a href="home.php">SCHOOL</a></h1><small style="color:orange">management system</small>
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
                    <b>Welcome Guest</b>
                    <b style="color: white;">shopping cart:</b>
                    <span>- Items: - Price:</span>
                </div>
            </div>
            <div id="product_box">
                <?php
                $get_product = "SELECT * FROM products order by rand() LIMIT 0,6";
                $run_product = mysqli_query($con,$get_product);
                while($row_products=mysqli_fetch_array($run_product))
                {
                    $pro_id =$row_products['product_id'];
                    $pro_title =$row_products['product_title'];
                    $pro_cat =$row_products['cat_id'];
                    $pro_brand =$row_products['brand_id'];
                    $pro_desc =$row_products['product_desc'];
                    $pro_proce =$row_products['product_price'];
                    $pro_image =$row_products['product_img1'];
                    echo "<div id='single_product'>
                    <h3>$pro_title</h3>
                    <img src='admin_area/product_images/$pro_image' width='180' height='180' ;/>
                    </div>";
                }
                ?>
            </div>
        </div>

        <div id="left_sidebar">
            <div id="sidebar_title">Categories</div>
            <ul id="category">

                <?php
                $sql = 'SELECT * FROM categories';
                $dat = mysqli_query($con,$sql);
                while ($row_cat = mysqli_fetch_array($dat))
                {
                    $cat_id =$row_cat['cat_it'];
                    $cat_title =$row_cat['cat_title'];
                    echo "<li><a href ='home.php?cat=$cat_id'>$cat_title</a ></li >";
                }
                ?>

            </ul>
            <div id="sidebar_title">Brands</div>
            <ul id="category">
                <?php
                $sql = 'SELECT * FROM brands';
                $dat = mysqli_query($con,$sql);
                while ($row_brands = mysqli_fetch_array($dat))
                {
                    $brand_id =$row_brands['brand_id'];
                    $brand_title =$row_brands['brand_title'];
                    echo "<li><a href ='home.php?cat=$brand_id'>$brand_title</a ></li >";
                }
                ?>


            </ul>

        </div>


        <!-- 1.3:SEnd -->
    </div>
    <div class="footer">
        <!-- 1.4:Footer Are0a start -->
        <h5 style="color:black;text-align:center;">SCHOOL &#169; 2017</h5>
        <!-- 1.4: End -->
    </div>

    <!-- 1:main header area End -->
</div>
</html>