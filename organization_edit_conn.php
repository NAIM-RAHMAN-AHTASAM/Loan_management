<?php
if(isset($_POST['update'])){
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_loanmanagementsystem";

		$conn = new mysqli($hostname,$username,$password,$dbname);



		if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}


		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['branch'];
		$sql = "UPDATE `tb_organization` SET `org_name` = '$name',`org_address` = '$address', `org_branch` = '$contact' WHERE `tb_organization`.`org_id` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location:organization_view.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>