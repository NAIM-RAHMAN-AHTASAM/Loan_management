<?php 
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>		
	<title></title>
</head>
<body>
	<div style="padding: 30px;">
	<center>
		<h2 style="font-size: 35px;">employee Information Update</h2>
		<?php
		$id = $_GET["id"];
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_loanmanagementsystem";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "SELECT * FROM tb_employee WHERE `Emp_id` = '$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>
			<form action="employee_edit_conn.php" method="post">
			   ID<br>
			  <input type="text" name="id" value="<?php echo $row['Emp_id']?>" readonly="">
			  <br><br>
			   Name<br>
			  <input type="text" name="name" value="<?php echo $row['Emp_name']?>">
			  <br><br>
			   Contact<br>
			  <input type="text" name="contact" value="<?php echo $row['Emp_contact']?>">
			  <br><br>
			   Mail<br>
			  <input type="text" name="mail" value="<?php echo $row['Emp_mail']?>">
			  <br><br>
			  <input type="submit" value="Update" name="update">
			   <br><br>
			</form>
	</center>
	<?php
}
}
	mysqli_close($conn);
          ?>
</div>

</body>
</html>
<?php include 'footer.php';?>