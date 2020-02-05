<?php include'header.php';?>
    <body>
        <center>
        <h1>Account Information</h1>
        <form action="account_conn.php" method="post">
            <div class="label1">Id:</div>
            <input type="text" name="acc_id" value=""><br><br>
            <div class="label2">Type:</div>
            <input type="text" name="acc_type" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </center>
    </body>
<?php include'footer.php';?>