<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="image/x-icon" href="img/logoicon1.ico" />
	<title>UPSite Creative</title>
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><img class="logoMa" src="img/Logo1.png" />
					<h1></h1>
				</div>
				
			</header>
		
			<ul class="menu-desktop">
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>

			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
			<div class="clear"></div>			
		</div><!--center-->
	</section><!--topo-->

	<section class="sobreEquipe">
		<div class="center">
			<div class="w50 equipe-sobre-texto">
				<h2>Uma equipe estratégica para um trabalho incrível!</h2>				
		            <p><strong>Quem Somos</strong></p>
		            <p>A <strong>UpSite Creative</strong> é uma agência de design e desenvolvimento digital focada em transformar ideias em experiências online excepcionais. Com uma abordagem inovadora, nossa missão é levar sua presença digital a um novo nível, criando sites modernos, responsivos e visualmente impactantes, além de soluções criativas para sua identidade visual.</p>
		            
		            <p><strong>Nossa Missão</strong></p>
		            <p>Nossa missão é proporcionar soluções digitais inovadoras e personalizadas para empresas e profissionais que buscam se destacar no mundo online. Oferecemos uma gama de serviços, incluindo <strong>web design</strong>, <strong>desenvolvimento em WordPress</strong>, <strong>criação de logos</strong> e <strong>desenvolvimento front-end</strong>, sempre com o foco em resultados eficientes, funcionais e que tragam verdadeiro valor para nossos clientes.</p>

		            <p><strong>Visão</strong></p>
		            <p>Ser referência no mercado de criação e desenvolvimento digital, oferecendo soluções criativas que conectam empresas com seu público-alvo de maneira eficaz, atraente e duradoura.</p>
		            
		            <p><strong>Por Que Escolher a UpSite Creative?</strong></p>
		            <p>Nós não apenas criamos websites. Criamos experiências digitais que ajudam sua marca a se destacar e alcançar o sucesso. Se você busca uma presença online de impacto, estamos prontos para transformar sua visão em realidade.</p>				
			</div>
			<div class="w50 equipe-sobre-imagem">
				<img src="img/equipe.jpg" />
			</div>
			<div class="w50 equipe-sobre-imagemabaixo">
				<img src="img/equipe2.jpg" />
			</div>			
		</div>
		<div class="clear"></div>
	</section>

	<section class="paginaSobre">
		<div class="center">
			<div class="img-sobre">
				<img src="img/fotosobre.jpg" />
			</div>
			<div class="img-sobre">
				<img src="img/fotosobre1.jpg" />
			</div>
			<div class="img-sobre">
				<img src="img/fotosobre2.jpg" />
			</div>
			<div class="img-sobre">
				<img src="img/fotosobre3.jpg" />
			</div>
		</div>
	</section>

	<footer>
	<section class="metodologia">
		<div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou telefone.</p>
			<a href="contato.php">Entrar Contato</a>
		</div>
	</section>
		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="contato.php">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="contato.php">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="contato.php">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="img/logo2.png" />
			</div>
		</div>
	</footer>


<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>

</body>
</html>