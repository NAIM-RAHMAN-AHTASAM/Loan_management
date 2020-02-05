<?php include 'header.php'; ?>

 <div id="printableArea">
<h2 align=center><big>EMPLOYEE     INFORMATION</big></h2> 
<div style="padding: 100px; " >


<?php
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

$sql = "SELECT * FROM tb_employee";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center> <tr> <th>ID</th> <th>Name</th>  <th>Contact</th> <th>Mail</th><th>Action</th><th>Action</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["Emp_id"]. "</td> <td>" . $row["Emp_name"]."</td> <td>". $row["Emp_contact"]."</td> <td>".$row["Emp_mail"]."</td><td>"."<a href='employee_edit.php?id=".$row["Emp_id"]."'><b>Update</a>"." / "."<a href='employee_delete.php?id=".$row["Emp_id"]."'>Delete</a>"." / "."<a href='employee_view_print.php?id=".$row["Emp_id"]."'>Print</b></a>"."</td> </tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>

</div>
</div>

<br><br>
      <center><input type="button" onclick="window.location.href='employee_all_print.php'" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>

<?php include 'footer.php'; ?>