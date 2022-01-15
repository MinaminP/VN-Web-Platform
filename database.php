<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vnplatform";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$charname = "";
$dialogue = "";
$id = 0;

  if (isset($_POST['save'])) {
    $charname = $_POST['charname'];
    $dialogue = $_POST['dialogue'];

		mysqli_query($conn, "INSERT INTO game (name, dialogue) VALUES ('$charname', '$dialogue')");
		$_SESSION['message'] = "Data has been saved";
		header('location: index.php');
	}
?>