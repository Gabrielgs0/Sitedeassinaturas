<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>site de assinatura</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="crossorigin="anonymous"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/Logo1.png" type="image/x-icon">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/c6764696e5.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="menu-container">
			<div class="menu">
			<div class="menu-logo">
				<a href="index.html"><img src="img/Logo1.png" alt="logo"></a>
			</div>	
			<nav class="nav">
				<ul class="nav-list">
					<li><a href="#somos" class="nav-link">Quem somos</a></li>
					<li><a href="#categorias" class="nav-link">Categorias</a></li>
					<li><a href="#planos" class="nav-link">Planos</a></li>
					<li><a href="#contato" class="nav-link">Contato</a></li>
					<li><a href="login.php" class="nav-link">Login</a></li>
				</ul>
			</nav>
			</div>
		</div> 
		<h1 class="intro">Inscreva-se e tenha acesso a,<br> Filmes,Series e muito mais!</h1>
	</header>
	<section class="somos" id="">
		<h2 class="section-titulo">Quem somos</h2>
		<hr> <br>
		<div class="somos-c">
			<div class="somos-texto">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae vero accusantium unde amet magnam dolores harum ab quos libero, vel alias consequatur excepturi in. Harum itaque officia illum labore iure.
				</p>
				<br>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quia reprehenderit dicta quidem placeat eligendi atque rem enim, fugiat quibusdam? Dolorem alias officia exercitationem ex culpa perferendis doloribus impedit quis.
				</p>
				
			</div>
			<div class="somos-video" id="somos">
			<video src="../ggs_videos/video/Video.mp4" autoplay controls loop="is_infinite" ></video>
			</div>
		</div>
	</section>
	<hr>

	<section class="categorias" id="categorias">
		<h2 class="section-titulo">Categorias</h2>
		<div class="categoria-c">
			<div class="categoria">
				<img class="categoria-img" src="img/filmes1.jpeg" alt="Filmes">
				<h3 class="categoria-titulo">Filmes</h3>
				<p class="categoria-descricao">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora officiis rerum sint mollitia quae deleniti fugiat quod fugit dolore laborum, quis totam, animi ab commodi dolorem nobis maiores earum. Sequi!
				</p>
			</div>

			<div class="categoria">
				<img src="img/series1.jpeg"  class="categoria-img" alt="Series">
				<h3 class="categoria-titulo">Series</h3>
				<p class="categoria-descricao">
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam ea corporis possimus, cum consequatur deleniti eius molestiae totam sint quisquam. Iusto unde vero repellat nulla nemo minus repudiandae, omnis tempore?
				</p>
			</div>
			<div class="categoria">
				<img src="img/animes1.jpg"  class="categoria-img" alt="Animes">
				<h3 class="categoria-titulo">Animes</h3>
				<p class="categoria-descricao">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam at dolorum consectetur maiores nam neque obcaecati itaque architecto, quia iste praesentium assumenda veniam distinctio eos unde ipsum. Harum, veniam explicabo!
				</p>
			</div>
		</div>
	</section>

	<hr>

	<section class="planos" id="planos">
		<h2 class="section-titulo"><span>Planos</span></h2>
		<div class="planos-c">

			<div class="plano">
				<h2 class="plano-titulo">Básico </h2>
				<span class="plano-preco"><sup>R$</sup>25</span>
				<hr class="plano-divisor">
				<ul class="plano-lista">
					<li class="plano-lista-item">1 mês de acesso a todas as categorias</li>
					<li class="plano-lista-item">imagem HD</li>
				</ul>
				<a href="#" class="plano-btn-comprar">Comprar</a>
			</div>

			<div class="plano">
				<h2 class="plano-titulo">Vip </h2>
				<span class="plano-preco"><sup>R$</sup>49.90</span>
				<hr class="plano-divisor">
				<ul class="plano-lista">
					<li class="plano-lista-item"> 1 mês de acesso a todas as categorias</li>
					<li class="plano-lista-item"> imagem Full HD</li>
					<br>
				</ul>
				<a href="#" class="plano-btn-comprar">Comprar</a>
			</div>

			<div class="plano">
				<h2 class="plano-titulo">Premium </h2>
				<span class="plano-preco"><sup>R$</sup>99.90</span>
				<hr class="plano-divisor">
				<ul class="plano-lista">
					<li class="plano-lista-item">1 mês de acesso a todas as categorias</li>
					<li class="plano-lista-item">imagem 4k</li>
					<li class="plano-lista-item">series e filmes exclusivos</li>
					<br>
				</ul>
				<a href="#" class="plano-btn-comprar">Comprar</a>
			</div>
		</div>
	</section>
	
	<section id="contato">
		<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
				<div class="container">
				  <div class="row row-30">
					<div class="col-md-4 col-xl-5">
				  <h5>Sobre</h5>
				  <br>
					  <div class="pr-xl-4"><a class="brand" href="index.html"></a>
						<p>Somos uma agência criativa, dedicada ao melhor resultado em intretenimento.</p>
						<!-- Rights-->
						<p class="rights"><span>©  </span><span class="copyright-year">2022</span><span> </span><span>Created By</span><span>. </span><span> <br> Gabriel Gonçalves.</span></p>
					  </div>
					</div>
					<div class="col-md-4">
					  <h5>Contatos</h5>
					  <dl class="contact-list">
						<dt>Endereço:</dt>
						<dd>Brasil : Serra Talhada PE</dd>
					  </dl>
					  <dl class="contact-list">
						<dt>email:</dt>
						<dd><a href="#">ggsvideos@gmail.com</a></dd>
					  </dl>
					  <dl class="contact-list">
						<dt>Fone:</dt>
						<dd><a href="#">87 9 99999999</a> <span>or</span> <a href="#">87 9 99999998</a>
						</dd>
					  </dl>
					</div>
					<div class="col-md-4 col-xl-3">
					  <h5>Links</h5>
					  <ul class="nav-list">
						<li><a href="#">Saiba Mais</a></li>
						<li><a href="#">Projetos</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contatos</a></li>
					  </ul>
					</div>
				  </div>
				
				<div class="row no-gutters social-container">
				  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
				  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
				  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
				  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
				</div>
			</div>
			  </footer>
	</section>
</body>
</html>
