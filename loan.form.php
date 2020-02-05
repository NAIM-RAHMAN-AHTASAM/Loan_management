<?php include'header.php';?>
    <body>
        <center>
        <h1>Member Information</h1>
        <form action="loan_conn.php" method="post">
            <div class="label1">sl:</div>
            <input type="text" name="sl" value=""><br><br>
            <div class="label2">total ammount:</div>
            <input type="text" name="total" value=""><br><br>
            <div class="label3">emi:</div>
            <input type="text" name="emi" value=""><br><br>
            <div class="label4">due :</div>
            <input type="text" name="due" value=""><br><br>
            <div class="label4">date :</div>
            <input type="text" name="date" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </center>
    </body>
<?php include'footer.php';?>