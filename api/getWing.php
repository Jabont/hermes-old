<?php
	/*
	 * Get wing information including code from id
	 * GET Param (id, client, token)
	 */
	session_start();

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

	if (isset($_GET['wing'])) { //&& isset($_SESSION['client']) && isset($_SESSION['token'])) {

		if (1) {//tokenValidate($_GET['client'], $_GET['token'])) {
			$conn = conn();		
			$sql = "SELECT * FROM wing WHERE access_id=".$_GET['wing'];
			$data = array();
			if ($result = $conn->query($sql)) {
				if ($result->num_rows) {
					while ($row = $result->fetch_assoc()) {
						$revision = $row['revision_id'];
						unset($row['revision_id']);
						unset($row['id']);
						$data['wing'] = $row;
					}

					$sql = "SELECT html_source, css_source, js_source FROM revision WHERE id=".$revision;
					$result = $conn->query($sql);
					$code = array();
					if ($result) {
						while ($row = $result->fetch_assoc()) {
							$code['code'] = $row;
						}
					} else {
						echo $conn->error;
					}
					
					$sql = "SELECT code FROM source_html WHERE id=".$code['code']['html_source'];
					$result = $conn->query($sql);
					if ($result) {
						while ($row = $result->fetch_assoc()) {
							$data['code']['html'] = $row['code'];
						}
					} else {
						echo $conn->error;
					}

					$sql = "SELECT code FROM source_css WHERE id=".$code['code']['css_source'];
					$result = $conn->query($sql);
					if ($result) {
						while ($row = $result->fetch_assoc()) {
							$data['code']['css'] = $row['code'];
						}
					} else {
						echo $conn->error;
					}

					$sql = "SELECT code FROM source_js WHERE id=".$code['code']['js_source'];
					$result = $conn->query($sql);
					if ($result) {
						while ($row = $result->fetch_assoc()) {
							$data['code']['js'] = $row['code'];
						}
					} else {
						echo $conn->error;
					}
					$data['found'] = 1;
				} else {
					$data['found'] = 0;
				}
			}
			echo json_encode($data);
		} else {
			echo "token invalid";
		}
	}
?>