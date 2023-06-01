
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Veritabanı bağlantısı
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "app_ls";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Veritabanına bağlanılamadı: " . $conn->connect_error);
	}

	// POST verilerini al
	$sender_id = $_POST["sender_id"];
	$receiver_id = $_POST["receiver_id"];
	$message = $_POST["message"];

	// Mesajı veritabanına ekle
	$sql = "INSERT INTO messages (sender_id, receiver_id, message) VALUES ('$sender_id', '$receiver_id', '$message')";

	if ($conn->query($sql) === TRUE) {
		echo "Mesaj gönderildi.";
	} else {
		echo "Hata: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
