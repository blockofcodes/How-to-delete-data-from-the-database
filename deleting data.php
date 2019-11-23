<?php
$host ="localhost";
$dbusername="db_username";
$dbpassword="password";
$dbname="dbname";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$sql = "DELETE FROM studentdata where ID = '$_GET[id]'";

if ($conn->query($sql) === TRUE) {

    header("refresh:1; url=school.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
