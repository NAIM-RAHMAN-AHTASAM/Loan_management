



<?php include'header.php';?>
    <body>
        <center>
        <h1>Member Information</h1>
        <form action="member_conn.php" method="post">
            <div class="label1">id:</div>
            <input type="text" name="Mem_id" value=""><br><br>
            <div class="label2">name:</div>
            <input type="text" name="Mem_name" value=""><br><br>
            <div class="label3">Address:</div>
            <input type="text" name="Mem_address" value=""><br><br>
            <div class="label4">Contact :</div>
            <input type="text" name="Mem_contact" value=""><br><br>
            <div class="label4">Mail :</div>
            <input type="text" name="Mem_mail" value=""><br><br>
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


$id = $_POST['Mem_id'];
$name = $_POST['Mem_name'];
$address = $_POST['Mem_address'];
$contact = $_POST['Mem_contact'];
$mail = $_POST['Mem_mail'];


$sql = "INSERT INTO tb_member( Mem_id,Mem_name, Mem_address,Mem_contact,Mem_mail) VALUES('$id', '$name','$address','$contact','$mail' )";
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