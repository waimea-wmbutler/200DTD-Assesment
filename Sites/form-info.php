<!-- Form To Add Personal information -->

<?php
include 'Partial/top.php'; 
require '_function.php';

$id = $_GET['person'];

?>

<h2> New Attribute </h2>
<form method="post"action="add-info.php">
<!-- Input Information About Person -->
	<label>Topic</label>
	<input name ="topic" type="text" placeholder="e.g. Favourite Food" required>
	<label>Info</label>
	<input name ="info" type="text" placeholder="e.g. Hamburger " required>


	
	<input type ="submit" value="add">

<?php
include 'Partial/bottom.php'; ?>