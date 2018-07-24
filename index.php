<?php
$serverName = "finalprserver.database.windows.net";
$connectionOptions = array(
    "Database" => "finalprdbb",
    "Uid" => "ravdeep",
    "PWD" => "Like@1234"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);


$tsql="SELECT * FROM dbo.users";

$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['id'] . " " . $row['name'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);
?>
