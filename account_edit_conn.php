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
		$type = $_POST['type'];


		$sql = "UPDATE `tb_account` SET `Acc_type` = '$type' WHERE `tb_account`.`Acc_id` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location: account_view.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>