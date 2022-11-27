<?php 
	require 'config.php';

	if(isset($_POST['aid'])) {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM car_number WHERE number_id = " . $_POST['aid']);
		$stmt->execute();
		$car_number = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($car_number);
	}

	function loadAuthors() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM car_type");
		$stmt->execute();
		$car_type = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $car_type;
	}

 ?>