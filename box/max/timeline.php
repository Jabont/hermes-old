<?php
    function connect() {
        $conn = mysqli_connect("localhost", "hermes_db", "hermesit16", "hermes_db");
        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        }
        mysqli_set_charset($conn,"utf8");
		return $conn;
    }

    function createWing() {
        $wing_id = "M3B967";
        $sql = "INSERT INTO timeline(wing_id,firstCreate) VALUES ('$wing_id',NOW())";
        $conn = connect();
        mysqli_query($conn, $sql);
    }

    function updateWing() {
        $sql = "UPDATE timeline SET lastUpdate=NOW() WHERE wing_id='ABCDEF'";        
        $conn = connect();
        mysqli_query($conn, $sql);
    }

    updateWing();
?>