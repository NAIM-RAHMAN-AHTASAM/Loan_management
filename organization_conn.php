<?php include'header.php';?>
     <body>
        <center>
        <h1>Organization Information</h1>
        <form action="organization_conn.php" method="post">
            <div class="label1">Id:</div>
            <input type="text" name="org_id" value=""><br><br>
            <div class="label2">Name:</div>
            <input type="text" name="org_name" value=""><br><br>
            <div class="label4">Address :</div>
            <input type="text" name="org_address" value=""><br><br>
            <div class="label4">Branch :</div>
            <input type="text" name="org_branch" value=""><br><br>
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


$id = $_POST['org_id'];
$name = $_POST['org_name'];
$address = $_POST['org_address'];
$branch = $_POST['org_branch'];


$sql = "INSERT INTO tb_organization( org_id,org_name,org_address,org_branch) VALUES('$id', '$name','$address','$branch' )";
//$dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
} else {
    if ($id == "" || $name == ""  || $address == ""  || $branch == "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<?php include'footer.php';?>