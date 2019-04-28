<?php
	/*
	 * Save wing
	 * SESSION Param (user_id (client))
	 * POST Param (json_code, token)
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

	function genWingID($table, $authorID){
		$milliseconds = round(microtime(true) * 1000);
		$merge = $table.$authorID.$milliseconds;
		$generated = hash("sha256", $merge);
		$randomedNumber = strval(rand(0, 99999));
		$randomedMerge = $generated.$randomedNumber;
		$generated = hash("sha256", $randomedMerge);
		$generated = substr($generated, 0, 6);

		for ($i = 0, $c = strlen($generated); $i < $c; $i++) {
		  $generated[$i] = rand(0, 100) > 50 ? strtoupper($generated[$i]) : $generated[$i];
		}

		$conn = conn();
		$sql = "SELECT * FROM wing WHERE access_id=".$generated;
		if ($result = $conn->query($sql)) {
			if ($result->num_rows) {
				return genWingID($table, $authorID);
			} else {
				return $generated;
			}
		} else {
			return $generated;
		}
	}

	$alreadyWing = false;
	$uid = $_SESSION['uid'];
	$content = file_get_contents("php://input");
	$content = json_decode($content, true);
	$token = $_SESSION['token'];
	$key = $content['wing_id'];
	if ($key != -1) {
		$alreadyWing = true;
	}

	if (isset($uid) && isset($key) && isset($content) && isset($token)) {
		if (tokenValidate($uid, $token)) {
			$html_id = -1;
			$css_id = -1;
			$js_id = -1;
			$html_nid = -1;
			$css_nid = -1;
			$js_nid = -1;

			// Check if wing exist and get code source id
			if ($alreadyWing) {
				$sql = "SELECT * FROM wing WHERE access_id=".$key;
				$result = $conn->query($sql);
				$data = array();
				if ($result) {
					while ($row = $result->fetch_assoc()) {
						$revision = $row['revision_id'];
					}
				} else {
					echo $conn->error;
				}

				$sql = "SELECT html_source, css_source, js_source FROM revision WHERE id=".$revision;
				$result = $conn->query($sql);
				$code = array();
				if ($result) {
					while ($row = $result->fetch_assoc()) {
						$html_id = $result['html_source'];
						$css_id = $result['css_source'];
						$js_id = $result['js_source'];
					}
				} else {
					echo $conn->error;
				}

				// HTML
				$sql = "SELECT code FROM source_html WHERE id=".$html_id;
				$result = $conn->query($sql);
				if ($result) {
					while ($row = $result->fetch_assoc()) {
						$html_code = $row['code'];
					}

					if ($html_code != $obj['htmlSource']) {
						$sql = "INSERT INTO source_html (code) VALUES ('".$obj['htmlSource']."')";
						if ($conn->query($sql)) {
							$html_nid = $conn->insert_id;
						} else {
							echo $conn->error;
						}
					} else {
						$html_nid = $html_id;
					}
				} else {
					echo $conn->error;
				}

				// CSS
				$sql = "SELECT code FROM source_css WHERE id=".$css_id;
				$result = $conn->query($sql);
				if ($result) {
					while ($row = $result->fetch_assoc()) {
						$css_code = $row['code'];
					}

					if ($css_code != $obj['cssSource']) {
						$sql = "INSERT INTO source_css (code) VALUES ('".$obj['cssSource']."')";
						if ($conn->query($sql)) {
							$css_nid = $conn->insert_id;
						} else {
							echo $conn->error;
						}
					} else {
						$css_nid = $css_id;
					}
				} else {
					echo $conn->error;
				}

				// JS
				$sql = "SELECT code FROM source_js WHERE id=".$js_id;
				$result = $conn->query($sql);
				if ($result) {
					while ($row = $result->fetch_assoc()) {
						$js_code = $row['code'];
					}

					if ($js_code != $obj['jsSource']) {
						$sql = "INSERT INTO source_js (code) VALUES ('".$obj['jsSource']."')";
						if ($conn->query($sql)) {
							$js_nid = $conn->insert_id;
						} else {
							echo $conn->error;
						}
					} else {
						$js_nid = $js_id;
					}
				} else {
					echo $conn->error;
				}
			} else {
				$sql = "INSERT INTO source_html (code) VALUES ('".$obj['htmlSource']."')";
				if ($conn->query($sql)) {
					$html_nid = $conn->insert_id;
				} else {
					echo $conn->error;
				}

				$sql = "INSERT INTO source_css (code) VALUES ('".$obj['cssSource']."')";
				if ($conn->query($sql)) {
					$css_nid = $conn->insert_id;
				} else {
					echo $conn->error;
				}

				$sql = "INSERT INTO source_js (code) VALUES ('".$obj['jsSource']."')";
				if ($conn->query($sql)) {
					$js_nid = $conn->insert_id;
				} else {
					echo $conn->error;
				}
			}

			if ($html_id != $html_nid || $css_id != $css_nid || $js_id != $js_nid || !$alreadyWing) {
				$sql = "INSERT INTO revision (html_source, css_source, js_source) VALUES (".$html_nid.", ".$css_nid.", ".$js_nid.")";
				if ($conn->query($sql)) {
					$revision_id = $conn->insert_id;
				} else {
					echo $conn->error;
				}
			}

			if ($alreadyWing) {
				// Already exist wing
				$sql = "UPDATE wing SET revision_id=".$revision_id." WHERE id=".$key;
				if ($conn->query($sql)) {
					echo "success";
				} else {
					die("unsuccess 1");
				}
			} else {
				// Not exist wing
				$gen_id = genWingID("User", $uid);
				$sql = "INSERT INTO wing (owner_id, revision_id, access_id) VALUES (".$uid.", ".$revision_id.", ".$gen_id.")";
				if ($conn->query($sql)) {
					echo "success new_id=".$gen_id;
					$wing_created_id = $conn->insert_id;
				} else {
					echo $conn->error;
					die("unsuccess 2");
				}
			}
		} else {
			die('token invalid!');
		}
	} else {
		die('bad request!');
	}
?>