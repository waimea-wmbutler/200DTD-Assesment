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
					 information.favActivity
					 FROM people
				     JOIN information on people.forename = information.forename';
					 
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

echo '<ul id="people">';	
echo '<table>
<tr>
	<th> Forename </th>
	<th> Surname </th>
	<th> Favourite Activity </th>
</tr>';

foreach ($people as $person)  {
	echo '<tr>';

	echo '<td>' . $person['forename'] . '</td>';
	echo '<td>' . $person['surname'] . '</td>';
	echo '<td>' . $person['favActivity'] . '</td>';
	echo '</tr>';
}

echo '</table>';
echo '</ul>';

echo '<div id="add-button">
		<a href="forum-person.php">
			Add
		</a>
	<div>';

?>