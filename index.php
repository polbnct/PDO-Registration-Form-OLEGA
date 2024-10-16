<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration System</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  margin:auto;
		  border-bottom: 1px solid;
		}
	</style>
</head>
<body>
	<h3>Welcome to the Security Personnel Registration System.</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName" style="padding-right:10px;">First Name: </label> <input type="text" name="firstName"></p>
		<p><label for="lastName" style="padding-right:10px;">Last Name: </label> <input type="text" name="lastName"></p>
		<p><label for="gender" style="padding-right:35px;">Gender: </label> <input type="text" name="gender"></p>
		<p><label for="age" style="padding-right:60px;">Age: </label> <input type="text" name="age"></p>
		<p><label for="specialization">Specilization: </label> <input type="text" name="specialization"></p>
		<p><label for="certification"style="padding-right:5px;">Certification: </label> <input type="text" name="certification"></p>
		<p><label for="date_time">Date of Birth: </label> <input type="date" name="date_time">
        <p><label for="email" style="padding-right:50px;">Email: </label> <input type="email" name="email"></p>
		<button type="submit" name="insertNewUserBtn" style="width: 100px; height:100px; font-weight: bold; margin-left:100px;">Submit Information</button>
	</form>

	<table style="width:70%; margin-top: 70px;">
	  <tr>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Gender</th>
	    <th>Age</th>
	    <th>Specilization</th>
	    <th>Certification</th>
	    <th>Date</th>
	    <th>Email</th>
	    <th>Action</th>
	  </tr>
	  <?php $seeAllUserRecords = seeAllUserRecords($pdo); ?>
	  <?php foreach ($seeAllUserRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['firstName']; ?></td>
	  	<td><?php echo $row['lastName']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['specialization']; ?></td>
	  	<td><?php echo $row['certification']; ?></td>
	  	<td><?php echo $row['date_time']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td>
	  		<a href="edituser.php?employee_id=<?php echo $row['employee_id']; ?>">Edit</a>
	  		<a href="deleteuser.php?employee_id=<?php echo $row['employee_id']; ?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>