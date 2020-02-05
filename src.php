<?php include 'header.php'; ?>


	<form action= "src.php" method="POST" style="text-align:center">

    <center>    <br><br>               

      <input type="text" style="font-size:150%;" name="search_id" placeholder="Search by Member ID...">
      <br><br>

      <button class="button" ><b><big>Search</big></button>
      <br><br>

    </center>
</form>
<div style="padding: 60px;">
<center>
<div id="printableArea">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_loanmanagementsystem";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM tb_member where Mem_id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
  echo "<br><tr><th>Id</th><th> Name</th><th> Address</th><th>Contact</th><th>Email</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>". $row["Mem_id"]. "</td><td>" . $row["Mem_name"]."</td><td>" . $row["Mem_address"]."</td><td>" . $row["Mem_contact"]."</td><td>" . $row["Mem_mail"]."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<center><h2> PLease! Insert a valid ID!</h2><center>";
}

mysqli_close($conn);
?> 
</div>

<br><br>
      <center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
</center>
</div>




<?php include 'footer.php'; ?>
