<html>
<head>
</head>
   
<body>
    <link rel="stylesheet" type="text/css" href="placed.css">
    <h1 align="center">CART</h1>
	<form class="form-box">
        <div class="form-input">
		<label>Order No</label>  <input type="text" name="txtOrderNo"><br><br>
        </div>
        <div class="form-input">
		<label>Customer Name</label>  <input type="text" name="txtCustName">
		<label>Date</label>  <input type="text" name="txtDate" placeholder="yyyy-mm-dd"><br><br>
        </div>
        <label>Category :</label>
        <div class="form-input">
		<select name="cmbCategory" id="category-list" class="inputbox" >
            <option value disabled selected >Select Category</option>
			<?php
				$con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
				$qry="select DISTINCT category from menu";
				$rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{
					echo "<option value ='".$row['category']."'>";
					echo $row['category'];
					echo "</option>";
				}
			?>
		</select><br><br>
        </div>
            <label>Item :</label>
        <div class="form-input">
		<select name="cmbItem" id="item-list" class="inputbox">
            <option value disabled selected>Select Item</option>
			<?php
				$con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
				$qry="select name from menu order by category desc";
				$rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{
					echo "<option value ='".$row['name']."'>";
					echo $row['name'];
					echo "</option>";
				}
			?>
		</select><br><br>
        </div>
         <div class="form-input">
		<label>Quantity</label> <input type="number" name="numQty " min="1"><br><br>
		<input type="submit" name="btnAdd" value="Add"><br>
        </div>
        <?php
    if(isset($_POST['btnAdd']))
    {
        $con=mysqli_connect('sql101.epizy.com','epiz_24622903','dYGz1pHYgYMi','epiz_24622903_php_project');
        $qry="INSERT into orders(order_id,customer_name,quantity,date of bill,) VALUES('','".$_POST['txtCustName'].",'".$_POST['numQty']."','".$_POST['txtDate']."')";
        $rs=mysqli_query($con,$qry);
    }
	?>	
     <div class="button">  
        <a href="order.php" class="btn">Place Order</a><br><br>
        <a href="cust_menu.php" class="btn">MENU</a><br><br>
        <a href="cust_home.php" class="btn2">GO BACK TO HOME PAGE</a>
    </div> 
	</form>
</body>
</html>