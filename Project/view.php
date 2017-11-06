
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View Records</title>

</head>

<body>



<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('config.php');



// get results from database
$view="SELECT * FROM emp";
$result = $db->query($view);	// mysqli_query($db,$view);
if(!$result)
{die(mysql_error());
}


// display data in table

// echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>password</th> <th></th> <th></th></tr>";



// loop through results of database query, displaying them in the table

while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['username'] . '</td>';

echo '<td>' . $row['passcode'] . '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="insert.php">Add a new record</a></p>



</body>

</html>