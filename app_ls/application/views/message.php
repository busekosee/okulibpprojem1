<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'templates/header.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app_ls";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

// Veritabanından mesajları al
$query = $conn->query("SELECT * FROM messages");
$messages = array();
while ($row = $query->fetch_object()) {
	$messages[] = $row;
}
?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Navbar içeriği buraya gelecek -->
	</nav>

	<!-- Sidebar -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Sidebar içeriği buraya gelecek -->
	</aside>

	<!-- Content Wrapper -->
	<div class="content-wrapper">
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Mesajlar</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered">
									<thead>
									<tr>
										<th>ID</th>
										<th>Gönderen</th>
										<th>Mesaj</th>
										<th>Tarih</th>
										<th>Seç</th>
									</tr>
									</thead>
									<tbody>
									<?php if (!empty($messages)) { foreach ($messages as $message) { ?>
										<tr>
											<td><?php echo $message->id; ?></td>
											<td><?php echo $message->sender_id; ?></td>
											<td><?php echo $message->message; ?></td>
											<td><?php echo $message->created_at; ?></td>
											<td>
												<input type="checkbox" name="selected_messages[]" value="<?php echo $message->id; ?>" <?php if ($message->is_selected == 1) echo 'checked'; ?>>

											</td>


										</tr>

										<!-- Mesaj Yanıtı Formu -->
										<tr>
											<td colspan="5">
												<form method="post" action="<?php echo base_url('messages/add_reply'); ?>">
													<input type="hidden" name="message_id" value="<?php echo $message->id; ?>">
													<textarea name="reply" placeholder="Yanıt"></textarea>
													<button type="submit">Yanıtla</button>
												</form>
											</td>
										</tr>
									<?php } } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>


				</div>
			</div>
		</section>
	</div>

	<?php include 'templates/footer.php';?>
</div>
