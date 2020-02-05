<?php include 'header.php'; ?>

<center>
    <form method="POST" style="text-align:center" action="print_report.php">

        <h2 style="font-size:150%;"> Search By Account Number:</h2>
        <input type="text" style="font-size:150%;" name="acc_number">
        <br><br>
        <button class="button" ><b><big>Search</big></button>
        <br><br>
    </form>

    <div>
        <div class="table">
            <div id="printableArea">
               <center> <h2>EMI Information</h2></center>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_loanmanagementsystem";

                if(isset($_POST["acc_number"])){
                $acc_number=$_POST["acc_number"];
                }
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                $sql = "SELECT tb_loan.sl,tb_loan.total,tb_loan.emi,tb_loan.due,tb_loan.date,tb_member.Mem_name,tb_member.Mem_address
                    FROM tb_account
                    INNER JOIN tb_loan ON tb_account.Acc_id = tb_loan.Acc_id
                    INNER JOIN tb_member ON tb_account.Acc_id = tb_member.Acc_id
                    WHERE tb_account.Acc_id='$acc_number'";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) 
                {
                    ?>
                    <center>
                    <table>
                        <tr><th>Sl</th><th>Name</th><th>Address</th><th>Total Amount</th><th>EMI</th><th>Due Amount</th><th>Date</th></tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                        ?>

                        <tr><td><?php echo $row['sl'];?></td><td><?php echo $row['Mem_name'];?></td><td><?php echo $row['Mem_address'];?></td><td><?php echo $row['total'];?></td><td><?php echo $row['emi'];?></td><td><?php echo $row['due'];?></td><td><?php echo $row['date'];?></td></tr>

                        <?php
                    }
                    ?>
                    </table>
                    </center>
                <?php
                }
                else 
                {
                    echo "<h2><font color='black'>No Data Found </font></h2>";
                }

                mysqli_close($conn);
                ?> 
            </div>
        </div>
    </div>
</center>

<center> <input type="button" onclick="printDiv('printableArea')" value="print"/></center>


<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>


<?php include 'footer.php'; ?>