<?php  
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewUserBtn'])) {
	$firstName = $_POST['firstName']; 
	$lastName = $_POST['lastName']; 
	$gender = $_POST['gender']; 
	$age = $_POST['age']; 
	$specialization = $_POST['specialization']; 
	$certification = $_POST['certification']; 
	$date_time = $_POST['date_time']; 
	$email = $_POST['email']; 


	if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($age) && !empty($specialization) && !empty($certification) && !empty($date_time) && !empty($email)) {

		$query = insertIntoRecords($pdo, $firstName, $lastName, $gender, $age, $specialization, $certification, $date_time, $email);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Query failed, Please Try Again!";
		}
	}

	else {
		echo "Make sure no input fields are empty!";
	}

}

if (isset($_POST['editUserBtn'])) {
	$employee_id = $_GET['employee_id'];
	$firstName = $_POST['firstName']; 
	$lastName = $_POST['lastName']; 
	$gender = $_POST['gender']; 
	$age = $_POST['age']; 
	$specialization = $_POST['specialization']; 
	$certification = $_POST['certification']; 
	$date_time = $_POST['date_time']; 
	$email = $_POST['email']; 

	if (!empty($employee_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($age) && !empty($specialization) && !empty($certification) && !empty($date_time) && !empty($email)) {

		$query = updateAUser($pdo, $employee_id, $firstName, $lastName, $gender, $age, $specialization, $certification, $date_time, $email);

		if ($query) {
			header("Location: ../index.php");
		}
		
		else {
			echo "Query failed";
		}

	}

	else {
		echo "Make sure no input fields are empty before updating!";
	}

	

}

if (isset($_POST['deleteUserBtn'])) {
	
	$query = deleteAUser($pdo, $_GET['employee_id']);
	
	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Deletion failed";
	}
}

else {
	echo "Please try Again!";
}

?>