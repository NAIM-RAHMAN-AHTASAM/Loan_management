<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_loanmanagementsystem";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["id"];
$sql = "DELETE FROM `tb_organization` WHERE `tb_organization`.`org_id` = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: organization_view.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>