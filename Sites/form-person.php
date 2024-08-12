<!-- Form To Add Person -->

<?php
include 'Partial/top.php'; 
require '_function.php';
?>

<h2> New Addition To The Tree </h2>
<form method="post"action="add-person.php">
<!-- Input Information About Person -->
	<label>Forename</label>
	<input name ="forename" type="text" minlength="3" maxlength="12" placeholder="e.g. John"required>
	<label>Surname</label>
	<input name ="surname" type="text" placeholder="e.g. Smith "required>
	<label> Date Of Birth</label>
	<input name ="dob" type="date" >

	
	<input type ="submit" value="add">

<?php
include 'Partial/bottom.php'; ?>