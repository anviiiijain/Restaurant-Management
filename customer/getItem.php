<?php
$con=mysqli_connect('localhost','root','','php_project');
			if(!empty($_POST['cmbCategory_id']))	
            {
                $qry="select *  from menu where category='".$_POST['cmbCategory_id']."' order  by name asc" ;
				$rs=mysqli_query($con,$qry);
				while($row=mysqli_fetch_array($rs))
				{
					echo "<option value ='".$row['name']."'>";
					echo $row['name'];
					echo "</option>";
				}
            }

?>