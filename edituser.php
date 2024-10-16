<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php';

echo "<h1>Editing Information</h1>";

$getUserByID = getUserByID($pdo, $_GET['employee_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<form action="core/handleForms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name: </label> 
			<input type="text" name="firstName" value="<?php echo $getUserByID['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name: </label> 
			<input type="text" name="lastName" value="<?php echo $getUserByID['lastName']; ?>">
		</p>
		<p>
			<label for="team_name">Gender: </label>
			<input type="text" name="gender" value="<?php echo $getUserByID['gender']; ?>">
		</p>
		<p>
			<label for="assigned_to">Age: </label>
			<input type="text" name="age" value="<?php echo $getUserByID['age']; ?>">
		</p>
		<p>
			<label for="reason">Specilization: </label>
			<input type="text" name="specialization" value="<?php echo $getUserByID['specialization']; ?>">
		</p>
		<p>
			<label for="urgency">Certification: </label>
			<input type="text" name="certification" value="<?php echo $getUserByID['certification']; ?>"></p>
		<p>
			<label for="date_time">Date: </label>
			<input type="text" name="date_time" value="<?php echo $getUserByID['date_time']; ?>">
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="text" name="email" value="<?php echo $getUserByID['email']; ?>">
		</p>
		<button type="submit" name="editUserBtn" style="width: 100px; height:100px; font-weight: bold; margin-left:100px;">Submit New Information</button>
	</form>
</body>
</html>