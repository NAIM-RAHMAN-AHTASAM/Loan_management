<?php include 'header.php'; ?>

 <div id="printableArea">
<h2 align=center><big>Organization INFORMATION</big></h2> 
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

$sql = "SELECT * FROM tb_organization";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center> <tr> <th>ID</th> <th>Name</th><th>Address</th><th>Branch</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>" . $row["org_id"]. "</td> <td>" . $row["org_name"]."</td><td>". $row["org_address"]."</td> <td>". $row["org_branch"]."</td> </tr>";
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


      <center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script><br>

<?php include 'footer.php'; ?>