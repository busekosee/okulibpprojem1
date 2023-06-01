<!-- Formu burada gösterin -->
<form method="get" action="<?php echo site_url('RepliesController/show_replies'); ?>">
	<input type="text" name="message_id" placeholder="Mesaj ID'si">
	<button type="submit">Mesajları Göster</button>
</form>


<!-- Mesajları burada gösterin -->
<?php
if (!empty($replies)) {
	foreach ($replies as $reply) {
		echo '<p>'.$reply->reply.'</p>'; // $reply->reply olarak güncellenmesi gerekiyor
	}
} else {
	echo 'Mesaj bulunamadı.';
}
?>

