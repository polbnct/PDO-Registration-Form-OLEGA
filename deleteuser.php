<?php 
require_once 'core/dbConfig.php'; 
require_once 'core/models.php';

echo "<h1>Delete User Infromation? </h1>";

$getUserByID = getUserByID($pdo, $_GET['employee_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete</title>
</head>
<body>
	<form action="core/handleForms.php?employee_id=<?php echo $_GET['employee_id']; ?>" method="POST">
		<div class="container" style="border-style: solid;"> 
			<h2>FirstName: <?php echo $getUserByID['firstName']; ?></h2>
			<h2>LastName: <?php echo $getUserByID['lastName']; ?></h2>
			<h2>Gender: <?php echo $getUserByID['gender']; ?></h2>
			<h2>Age: <?php echo $getUserByID['age']; ?></h2>
			<h2>Specilization: <?php echo $getUserByID['specialization']; ?></h2>
			<h2>Certification: <?php echo $getUserByID['certification']; ?></h2>
			<h2>Date: <?php echo $getUserByID['date_time']; ?></h2>
			<h2>Email: <?php echo $getUserByID['email']; ?></h2>
			<input type="submit" value="Delete" name="deleteUserBtn">
		</div>
	</form>
</body>
</html>