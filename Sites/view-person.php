<!-- Front Page -->

<?php
require  '_function.php';
include 'Partial/top.php'; 

consoleLog($_GET, 'POST Data');

$id = $_GET['id'];


	$db = connectToDB();

	$query = 'SELECT * FROM people WHERE id=?';
					 
	try {
		$stmt = $db->prepare($query);
		$stmt->execute([$id]);
		$person = $stmt->fetch();
	}
	catch(PDOException $e) {
		consoleLog($e->getMessage(), ' Person Fetch', ERROR);
		die('There was an error getting person data from the database');
	}
	consoleLog($person);

/* The Table To Show All People Inside the DataBase  */


	echo '<h1>' . $person['forename'] . ' ' . $person['surname'] . '</h1>';

	$query = 'SELECT * FROM information WHERE person=?';
					 
	try {
		$stmt = $db->prepare($query);
		$stmt->execute([$id]);
		$infos = $stmt->fetchAll();
	}
	catch(PDOException $e) {
		consoleLog($e->getMessage(), ' Person Info Fetch', ERROR);
		die('There was an error getting person info data from the database');
	}
	consoleLog($infos);

	foreach ($infos as $info) {
		echo $info['topic'] . ' - ' . $info['info'];
	}

	$id == 'person'

/*echo '<div id="add-button">
		<a href="form-info.php?person='$id'">
			Add
		</a>
	<div>'; */
?> 