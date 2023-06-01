<?php include 'navbar.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>İletişim Formu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1>İletişim Formu</h1>
	<form>
		<div class="form-group">
			<label for="name">Adınız</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>
		<div class="form-group">
			<label for="email">E-posta Adresiniz</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>
		<div class="form-group">
			<label for="message">Mesajınız</label>
			<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Gönder</button>
	</form>
	<div class="contact-info">
		<p><i class="fas fa-phone"></i> Telefon: +90 123 456 7890</p>
		<p><i class="fas fa-envelope"></i> E-posta: info@example.com</p>
		<p><i class="fas fa-map-marker-alt"></i> Adres: Örnek Mahallesi, Örnek Sokak, No: 123, Örnek Şehir</p>
	</div>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
