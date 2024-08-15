<!-- The Addition of Person Confirmation Screen -->
<?php
require  '_function.php';
include 'Partial/top.php'; 
?>

<h1>Adding A New Person To The Family-Tree (Database)</h1>

<?php
consoleLog($_POST, 'POST Data');

$id = 
$for = 			$_POST['forename'];
$sur = 			$_POST['surname'];
$dob = 			$_POST['dob'];

echo '<p> Forename: '    . $for;
echo '<p> Surname: '    . $sur;
echo '<p> Date Of Birth: ' . $dob;

/* Data Base Connection */ 
$db = connectToDB();

$query = 'INSERT INTO people (`forename`, `surname`, `dob` ) VALUES ( ?, ?, ?)';

try {
	$stmt = $db->prepare($query);
	$stmt->execute([]);
}
catch(PDOException $e) {
	consoleLog($e->getMessage(), 'DB Person Add', ERROR);
	die(' There was an error adding person data to the database');
}

/* Success! */
echo '<p>Success!!</p>';
include 'Partial/bottom.php'; ?>