<?php
require  '_function.php';
include 'Partial/top.php'; 
?>

<h1>Family organiser</h1>

<p>Who are you looking for? </p>

<?php
	$db = connectToDB();
	consoleLog($db);
	$query = 'SELECT * FROM people ORDER BY priority DESC';

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

	foreach($people as $people) {
		echo $people['forname'];
	}

?>
