<?php
$conn=mysql_connect(" tcp:finalprserver.database.windows.net","ravdeep","Like@1234");
				$db=mysql_select_db("students",$conn);





$sqlcreateTable ="CREATE TABLE IF NOT EXISTS u_reg (
id INT(6) AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(20) NOT NULL,
fname VARCHAR(20) NOT NULL,
school VARCHAR(20),rollno VARCHAR(20),class VARCHAR(20)";
mysqli_query($conn, $sqlcreateTable);
?>
