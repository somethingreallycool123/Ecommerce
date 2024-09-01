<?php
$user = "root";
$dpass = "";
$ser = "localhost";
$dname = "dname";
try {
    $conn = mysqli_connect($ser, $user, $dpass, $dname);
    if (!$conn) {
        throw new mysqli_sql_exception("Failed to connect to MySQL: " . mysqli_connect_error());
    }
} catch (mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
