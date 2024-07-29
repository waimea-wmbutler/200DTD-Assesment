<?php
require  '_function.php';
include 'Partial/top.php'; 
?>

<h1>Family organiser</h1>

<p>Who are you looking for? </p>

<?php
	$db = connectToDB();
	consoleLog($db);
	$query = 'SELECT people.forename,
					 people.surname,
					 information.dob
					 FROM people ORDER BY forename DESC
				     JOIN information on people.id = information.id';

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

	foreach($people as $person) {
		echo $person['forename'];
	}

echo '<ul id="people">';	
echo '<table>
<tr>
	<th>Forename</th>
	<th>Surname</th>
	<th>Date Of Birth</th>
</tr>';

foreach ($people as $person)  {
echo '<tr>';

echo 	'<td>' . $person['forename'] . '</td>';
echo 	'<td>' . $person['surname'] . '</td>';
echo 	'<td>' . $person['dob'] . '</td>';
echo '</tr>';
}

echo '</table>';

echo '</ul>';

echo '<div id="add-button">
<a href="form-Person.php">
	Add
</a>
<div>';
?>