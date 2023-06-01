<?php include 'baskısım.php';?>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Ls Psikoloji</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="anasayfa.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="yemek.php">Neler Yemeliyiz?</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.php">Bloglar</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="iletisim.php">İletişim</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Giriş
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="http://localhost/app_ls/welcome/index">kullanıcı giriş</a>
					<a class="dropdown-item" href="http://localhost/app_ls/welcome/login">yönetici giriş</a>

				</div>
			</li>
		</ul>
	</div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="imgs/1.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="imgs/2.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="imgs/3.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<section class="p-5 text-center">
	<div class="container">
		<h2>Hakkımızda</h2>
		<hr>
		<p>
			Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
		</p>
	</div>
</section>

<div class="row p-5 text-center">
	<div class="card shadow text-center" style="width: 18rem;">
		<img class="card-img-top" src="imgs/ekip2.jpg" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Dr.Ada Yalçın</h5>
			<p class="card-text">Çoçuk Psikolojisi alanında uzmanım</p>
			<a href="mesaj.php" class="btn btn-primary">bana mesaj gönder</a>
		</div>
	</div>


	<div class="card shadow" style="width: 18rem;">
		<img class="card-img-top" src="imgs/ekip4.jpg" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Dr.Berk Kaplan</h5>
			<p class="card-text">Genç Psikolojisi alanında uzmanım.</p>
			<a href="mesaj.php" class="btn btn-primary">bana mesaj gönder</a>
		</div>
	</div>


	<div class="card shadow" style="width: 18rem;">
		<img class="card-img-top" src="imgs/ekip6.jpg" alt="Card image cap">
		<div class="card-body">
			<h5 class="card-title">Dr.Derya Tor</h5>
			<p class="card-text">Panik Atak ve Tedavisi</p>
			<a href="mesaj.php" class="btn btn-primary">bana mesaj gönder</a>
		</div>
	</div>
</div>


<?php include 'templates/footer.php'?>
