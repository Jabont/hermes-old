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

	function isWingIDExist($id) {
		
	}


?>