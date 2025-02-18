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


	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2>A mais Importante, <br />primeira conversa.</h2>
				<br />
				<p><b>Telefone:</b> (42) 99112-6109</p>
				<p><b>Email:</b> tcominesi@yahoo.com.br</p>
				<p><b>Endereço:</b> Rua Rio Branco, n.º 139, centro, Ivaí-Pr.</p>

			<div class="mapa-container">
				<div id="mapa">
					
				</div>
			</div>

			</div>

			<div class="w50 contato-form">
				<form action="https://formsubmit.co/tcominesi@yahoo.com.br" method="POST">
				<input type="hidden" name="_captcha" value="false">
				<input type="hidden" name="_next" value="http://localhost/Blog MA/sucesso.html">

					<input placeholder="Nome" type="text" name="Nome" required />
					<input placeholder="E-mail" type="email" name="email" required />
					<input placeholder="Telefone" type="text" name="Telefone" required />
					<select>
						<option>Geral</option>
						<option>Suporte</option>
					</select>
					<textarea name="mensagem" type="text" placeholder="Mensagem" required></textarea>
					<input type="submit" />
				</form>				
			</div>


			<div class="clear"></div>			
		</div>
	</section>

	<footer style="padding: 60px 0;">
		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="img/logo2.png" />
			</div>
		</div>
	</footer>

<script src="js/jquery.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBdbGoEhDaE1sIJK7lNbryDdwiUxitDOh4'></script>
<script src="js/map.js"></script>

<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>

</body>
</html>