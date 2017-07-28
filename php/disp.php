<?php

	include_once('conn.php');

if(!$db_selected)
{
	die('cannot access' . $dbname . ':' . mysql_error());
 }

$sql = "SELECT * FROM rsvpform";
$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Guest</th>
<th>Meal</th>
<th>Message</th>
</tr>";


if(mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['guest'] . "</td>";
echo "<td>" . $row['meal'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
echo "</tr>";
            
}
echo "</table>";
}

?>

