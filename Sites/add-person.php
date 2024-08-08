<!-- The Addition of Person Confirmation Screen -->
<?php
require  '_function.php';
include 'Partial/top.php'; 
?>

<h1>Adding A New Person To The Family-Tree (Database)</h1>

<?php
consoleLog($_POST, 'POST Data');

$for = 			$_POST['forename'];
$sur = 			$_POST['surname'];
$dob = 			$_POST['dob'];
$fafod = 		$_POST['favFood'];
$favact = 		$_POST['favActivity'];
$child = 		$_POST['children'];

echo '<p> Forename: '    . $for;
echo '<p> Surname: '    . $sur;
echo '<p> Date Of Birth: ' . $dob;
echo '<p> Favourite Food: ' . $fafod;
echo '<p> Favourite Activity: ' . $favact;
echo '<p> Children: ' . $child;
/* Data Base Connection */ 
$db = connectToDB();

$query = 'INSERT INTO information (`forename`, `surname`, `dob`, `favFood`, `favActivity`, `children` ) VALUES (?, ?, ?, ?, ?, ?)';
$query = 'INSERT INTO people (`forename`, `surname` ) VALUES (?, ?)'; 

try {
	$stmt = $db->prepare($query);
	$stmt->execute();
}
catch(PDOException $e) {
	consoleLog($e->getMessage(), 'DB Person Add', ERROR);
	die('There was an error adding data to the database');
}
/* Success! */
echo '<p>Success!!</p>';
include 'Partial/bottom.php'; ?>