<?php  

require_once 'dbConfig.php';

function insertIntoRecords($pdo, $firstName, $lastName, $gender, $age, $specialization, $certification, $date_time, $email) {

	$sql = "INSERT INTO records (firstName, lastName, gender, age, specialization, certification, date_time, email) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $gender, $age, $specialization, $certification, $date_time, $email]);

	if ($executeQuery) {
		return true;
	}
}

function seeAllUserRecords($pdo) {

	$sql = "SELECT * FROM records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}

}

function getUserByID($pdo, $employee_id) {

	$sql = "SELECT * FROM records WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$employee_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}

}

function updateAUser($pdo, $employee_id, $firstName, $lastName, $gender, $age, $specialization, $certification, $date_time, $email) {

	$sql = "UPDATE records
				SET firstName = ?,
					lastName = ?,
					gender = ?,
					age = ?,
					specialization = ?,
					certification = ?,
					date_time = ?,
					email = ?
				WHERE employee_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstName, $lastName, $gender, $age, $specialization, $certification, $date_time, $email, $employee_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteAUser($pdo, $employee_id) {

	$sql = "DELETE FROM records WHERE employee_id = ?";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$employee_id]);

	if ($executeQuery) {
		return true;
	}
}



?>