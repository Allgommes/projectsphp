<?php
$serverName = "localhost"; // or your server name
$database = "northwind"; // your database name

try {
    // Use Trusted_Connection=Yes for Windows Authentication
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful using Windows Authentication!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

}
?>