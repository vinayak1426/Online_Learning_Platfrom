<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}
echo "✅ MySQLi is successfully enabled and connected!";
?>
