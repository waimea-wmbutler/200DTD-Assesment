<?php

require '_function.php';

$id = $_GET['id'] ?? '';

//Connect to database

$db = connectToDB();

//Setup a query to get all company info

$query = 'DELETE FROM people WHERE id = ?';

//Attempt to run the query

try {

$stmt = $db->prepare($query);

$stmt->execute([$id]); // Pass in the data

}

catch (PDOException $e) {

consoleLog($e->getMessage(), 'DB Games Fetch',ERROR);

die('There was an error removing a task from the database');

}

include 'Partial/bottom.php';

header('location: index.php');