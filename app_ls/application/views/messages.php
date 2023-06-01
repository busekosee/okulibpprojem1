<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app_ls";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}


?>
<form method="POST" action="send_message.php">
	<input type="text" name="sender_id" placeholder="Gönderen ID">
	<input type="text" name="receiver_id" placeholder="Alıcı ID">
	<textarea name="message" placeholder="Mesajınız"></textarea>
	<button type="submit">Mesaj Gönder</button>
</form>
