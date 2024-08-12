<!-- Front Page -->

<?php
require  '_function.php';
include 'Partial/top.php'; 
?>

<h1>Family organiser</h1>

<p>Who are you looking for? </p>

<!-- Connect To Database -->
<?php
	$db = connectToDB();
	consoleLog($db);
	$query = 'SELECT * FROM people';
					 
	try {
		$stmt = $db->prepare($query);
		$stmt->execute();
		$people = $stmt->fetchAll();
	}
	catch(PDOException $e) {
		consoleLog($e->getMessage(), ' List Fetch', ERROR);
		die('There was an error getting data from the database');
	}
	consoleLog($people);

/* The Table To Show All People Inside the DataBase  */

echo '<ul id="people">';	
echo '<table>
<tr>
	<th> Forename </th>
	<th> Surname </th>
	<th> More</th>
</tr>';

foreach ($people as $person)  {
	echo '<tr>';

	echo '<td>' . $person['forename'] . '</td>';
	echo '<td>' . $person['surname'] . '</td>';
	echo '<td><a href="view-person.php?id=' . $person['id'] . '">View</a></td>';
	echo '</tr>';
}

echo '</table>';
echo '</ul>';

/* Addition And Reduction To the Database Buttons */
// echo '<div id="Remove-button">
// 		<a href= "delete-task.php"; >
//			DELETE
// 		</a>
// 	</div>'; 

echo '<div id="add-button">
		<a href="form-person.php">
			Add
		</a>
	<div>';

?>