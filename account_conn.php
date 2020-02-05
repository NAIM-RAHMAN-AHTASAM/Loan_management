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
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_loanmanagementsystem";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$id = $_POST['acc_id'];
$type = $_POST['acc_type'];


$sql = "INSERT INTO tb_account( Acc_id,Acc_type) VALUES('$id', '$type' )";
//$dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $type == "" ) {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<?php include'footer.php';?>