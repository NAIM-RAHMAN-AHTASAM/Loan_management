<?php include'header.php';?>
    <body>
        <center>
        <h1>employee Information</h1>
        <form action="employee_conn.php" method="post">
            <div class="label1">Id:</div>
            <input type="text" name="Emp_id" value=""><br><br>
            <div class="label2">Name:</div>
            <input type="text" name="Emp_name" value=""><br><br>
            <div class="label4">Contact :</div>
            <input type="text" name="Emp_contact" value=""><br><br>
            <div class="label4">Mail :</div>
            <input type="text" name="Emp_mail" value=""><br><br>
            <input type="submit" value="Submit">
        </form>
    </center>
    </body>
<?php include'footer.php';?>