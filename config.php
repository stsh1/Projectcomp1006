<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:finalprserver.database.windows.net,1433; Database = finalprdbb", "ravdeep", "Like@1234");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ravdeep@finalprserver", "pwd" => "Like@1234", "Database" => "finalprdbb", "LoginTimeout" => 90, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:finalprserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
