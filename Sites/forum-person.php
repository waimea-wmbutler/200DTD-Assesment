<?php
include 'Partial/top.php'; 
require '_function.php';
?>

<h2> New Addition To The Tree </h2>
<form method="post"action="add-person.php">

	<label>Forename</label>
	<input name ="forename" type="text" minlength="3" maxlength="12" placeholder="e.g. John"required>
	<label>Surname</label>
	<input name ="surname" type="text" placeholder="e.g. Smith "required>
	<label> Date Of Birth</label>
	<input name ="dob" type="text" placeholder="e.g. 08-04-1996" required>
	<label> Favourite Food</label>
	<input name ="favFood" type="text" placeholder="e.g. Burger" required>
	<label>Favourite Activity</label>
	<input name ="favActivity" type="text" placeholder="e.g. Playing Golf" required>
	<label> Children</label>
	<input name ="children" type="int" placeholder="e.g. 3" required>
	
	<input type ="submit" value="add">

<?php
include 'Partial/bottom.php'; ?>