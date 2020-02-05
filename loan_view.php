<?php include 'header.php'; ?>

<div id="printableArea">
<h2 align=center><big>loan Information</big></h2> 
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

$sql = "SELECT * FROM tb_loan";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center> <tr> <th>sl</th> <th>total amount</th> <th>emi</th> <th>due</th> <th>date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["sl"]. "</td> <td>" . $row["total"]."</td> <td>" . $row["emi"]."</td> <td>".$row["due"]."</td> <td>".$row["date"]."</td><td>"."<a href='loan_edit.php?id=".$row["sl"]."'><b>Update</a>"." / "."<a href='loan_delect.php?id=".$row["sl"]."'>Delete</a>"." / "."<a href='loan_print.php?id=".$row["sl"]."'>Print</b></a>"."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
<center><input type="button" onclick="window.location.href='loan_all_print.php'" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
</div>

</div>

<?php include 'footer.php'; ?>
</boby>
</html>