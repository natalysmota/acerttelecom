<link rel="stylesheet" href="css/cabecalho_style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<header id="cabecalho">
	<a href="index.php">
		<h1 class="logo">
			Empresa especializada em prover internet.
		</h1>
	</a>

	<!-- JQUERY ROLAGEM MENU SCREEN -->
	<script type="text/javascript">
		jQuery(document).ready(function($) { 
    		$('.scroll').click(function(event){        
       			event.preventDefault();
       			$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1400);
   			});
		});
	</script>

	<button class="btn-menu">
		<i class="fa fa-bars fa-lg"></i>
	</button>

	<nav class="menu">
		<button class="fechar-menu">
			Fechar
		</button>

		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="#quem-somos" class="scroll">QUEM SOMOS</a></li>
			<li><a href="#conteudo-planos" class="scroll">PLANOS</a></li>
			<li><a href="#servicos" class="scroll">SERVIÇOS</a></li>
			<li><a href="http://bandalarga.acertqueimadas.com.br/central">ÁREA DO ASSINANTE</a></li>
			<li><a href="http://webmail1.hostinger.com.br/roundcube/">WEBMAIL</a></li>
			<li><a href="#espaco-contato" class="scroll">CONTATO</a></li>
		</ul>
	</nav>

	<!-- JQUERY MENU MOBILE-->
	<script>
		$(".btn-menu").click(function() {
		    $(".menu").toggle(400);
		});

		$(".fechar-menu").mouseup(function(){
            $('.menu').slideUp();
        });
	</script>
</header>