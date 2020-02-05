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
		$contact = $_POST['contact'];
		$mail = $_POST['mail'];


		$sql = "UPDATE `tb_member` SET `Mem_name` = '$name',`Mem_address` = '$address', `Mem_contact` = '$contact', `Mem_mail` = '$mail' WHERE `tb_member`.`Mem_id` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location:member_view.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>