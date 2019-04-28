<?php
	function conn() {
		$servername = "localhost";
		$username = "hermes_db";
		$password = "hermesit16";
		$dbname = "hermes_db";
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die($conn->connect_error);
		} 
		else {
			mysqli_set_charset($conn, 'utf8');
			return $conn;
		}
	}
	
	function tokenValidate($client, $token) {
		$conn = conn();
		$expect_token = "";

		$sql = "SELECT token FROM user WHERE id=".$client;
		if ($result = $conn->query($sql)) {
			while ($row = $result->fetch_assoc()) {
				$expect_token = $row['token'];
			}
		} else {
			return false;
		}

		return $token == $expect_token;
	}

	if (isset($_GET['user'])) { //&& isset($_GET['client']) && isset($_GET['token'])) {

		if (1) {//tokenValidate($_GET['client'], $_GET['token'])) {
			$conn = conn();		
			$sql = "SELECT * FROM user WHERE id=".$_GET['user'];
			$response = $conn->query($sql);
			$data = array();

			while ($row = $response->fetch_assoc()) {
				unset($row['id']);
				unset($row['password']);
				unset($row['token']);
				$data['info'] = $row;
			}

			$sql = "SELECT * FROM wing WHERE owner_id=".$_GET['user'];
			$response = $conn->query($sql);
			$wing = array();
			while ($row = $response->fetch_assoc()) {
				$wing[] = $row;
			}
			$data['wing'] = $wing;
			echo json_encode($data);
		} else {
			echo "token invalid";
		}
	} else {
		echo "bad request";
	}
?>