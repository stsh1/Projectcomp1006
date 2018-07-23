<?php

// PHP Data Objects(PDO) Sample Code:
try {
    $dbConn = new PDO("sqlsrv:server = tcp:finalprserver.database.windows.net,1433; Database = finalprdb", "ravdeep", "Like@1234");
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection establish";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ravdeep@finalprserver", "pwd" => "Like@1234", "Database" => "finalprdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:finalprserver.database.windows.net,1433";
$dbConn = sqlsrv_connect($serverName, $connectionInfo);

?>
