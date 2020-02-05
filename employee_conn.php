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
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_loanmanagementsystem";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}


$id = $_POST['Emp_id'];
$name = $_POST['Emp_name'];
$contact = $_POST['Emp_contact'];
$mail = $_POST['Emp_mail'];


$sql = "INSERT INTO tb_employee( emp_id,emp_name,emp_contact,emp_mail) VALUES('$id', '$name','$contact','$mail' )";
//$dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == ""  || $contact == ""  || $mail == "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<?php include'footer.php';?>