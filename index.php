<?php
$conn=mysql_connect(" tcp:finalprserver.database.windows.net","ravdeep","Like@1234");
$q="Select * from u_reg";
$run=mysqli_query($conn, $q);
	 
				
			
				while ($row=mysqli_fetch_array($run)){
					$id = $row[0];
					$name = $row[1];
					$fname=$row[2];
				}
echo $row;
echo $id;
echo $name;
echo $fname;
?>
