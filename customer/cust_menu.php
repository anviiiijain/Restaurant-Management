<html>
    <HEAD>
        <title>MENU</title>
    </HEAD>
    <body>
        <link rel="stylesheet" type="text/css" href="ct-menu.css">
        <nav>
            <div class="container">
                <ul>
                     <li class="logo">..Curated Cuisines..</li>
                    <li><a href="Placing_order.php">Place Order</a></li>
                    <li><a href="cust_home.php">Home</a></li>
                    <li><a href="#" class="active">Menu</a></li>
                    <li><a href="../index.php">Front Page</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
        <h1>MENU</h1>
            <div class="row">
                <div class="names">
                    <h3>BREAKFAST</h3>
                    <table class="table-m" id="breakfast">
                    <tr>
                        <th>Item Name</th>
                    </tr>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="select * from menu where category='Breakfast' order by category desc";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                           // echo "<td>".$row['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div> 
                <div class="names">
                    <h3>STARTERS</h3>
                    <table class="table-m" id="starters">
                    <tr>
                        <th>Item Name</th>
                    </tr>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="select * from menu where category='starters' order by category desc";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                           // echo "<td>".$row['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div> 
                <div class="names">
                    <h3>SNACKS</h3>
                    <table class="table-m" id="snacks">
                    <tr>
                        <th>Item Name</th>
                    </tr>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="select * from menu where category='Snacks' order by category desc";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                           // echo "<td>".$row['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div> 
                <div class="names">
                    <h3>MAIN COURSE</h3>
                    <table class="table-m" id="maincourse">
                    <tr>
                        <th>Item Name</th>
                    </tr>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="select * from menu where category='main course' order by category desc";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                           // echo "<td>".$row['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div> 
                <div class="names">
                    <h3>DESSERT</h3>
                    <table class="table-m" id="dessert">
                    <tr>
                        <th>Item Name</th>
                    </tr>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="select * from menu where category='dessert' order by category desc";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                           // echo "<td>".$row['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div>
                <div class="names">
                    <h3>BEVERAGES</h3>
                    <table class="table-m" id="beverages">
                    <tr>
                        <th>Item Name</th>
                    </tr>
                    <?php
                        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
                        $qry="select * from menu where category='Beverages' order by category desc";
                        $rs=mysqli_query($con,$qry);
                        while($row=mysqli_fetch_array($rs))
                        {
                            echo "<tr>";
                            echo "<td>".$row['name']."</td>";
                           // echo "<td>".$row['category']."</td>";
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div> 
            </div>
        </div>
    </body>
</html>