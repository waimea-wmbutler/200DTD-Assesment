<!-- The Addition of Person Confirmation Screen -->
<?php
require  '_function.php';
include 'Partial/top.php'; 
?>

<h1>Adding New Personal Information To The Family-Tree (Database)</h1>

<?php
consoleLog($_POST, 'POST Data');


$top = 			$_POST['topic'];
$inf = 			$_POST['info'];


echo '<p> Topic: '    . $top;
echo '<p> Info: '    . $inf;


/* Data Base Connection */ 
$db = connectToDB();

$query = 'INSERT INTO people (`topic`, `info` ) VALUES (?, ?)';


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