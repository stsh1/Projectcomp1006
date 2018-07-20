<?php

 // PHP Data Objects(PDO) Sample Code:
try {
    $dbConn= new PDO("sqlsrv:server = tcp:demoimdwserver.database.windows.net,1433; Database = demoimdwdb", "ravdeepk", "{your_password_here}");
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ravdeepk@demoimdwserver", "pwd" => "{your_password_here}", "Database" => "demoimdwdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:demoimdwserver.database.windows.net,1433";
$bConn = sqlsrv_connect($serverName, $connectionInfo);

?>
