



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
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_loanmanagementsystem";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$id = $_POST['sl'];
$name = $_POST['total'];
$address = $_POST['emi'];
$contact = $_POST['due'];
$mail = $_POST['date'];


$sql = "INSERT INTO tb_loan( sl,total, emi,due,date) VALUES('$id', '$name','$address','$contact','$mail' )";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == "" || $address == ""  || $contact == ""|| $mail == "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<?php include'footer.php';?>