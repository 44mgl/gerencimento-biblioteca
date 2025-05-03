<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="utf-8"/>
        <title>BIBLIOTECA</title>
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	</head>
	<body>
            <header id="cabecalho">
                <hgroup>
                    <h1>BIBLIOTECA</h1>
                    <h2>Gerênciador de Bibliotecas</h2>
                </hgroup>

                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul>
                            <li><a href="index.php">Início</a></li>
                            <li><a href="livros.php">Livros</a></li>
                            <li><a href="dvds.php">DVD's</a></li>
                            <li><a href="fale-conosco.php">Fale Conosco</a></li>
                    </ul>
                    <div id="divBusca">
				<form method="POST" action="busca.php">
        <input type="text" id="txtBusca" name="busca" placeholder="Buscar..." />
        <button type="submit" id style="background:none; border:none; padding:0;">
            <img src="_imagens/lupa.png" alt="Buscar..." id="btnBusca" width="40" height="40"/>
        </button>
    </form>
                </div>
                </nav>
            </header>
            <section id="corpo">
                <marquee><h1>Gerêncie todos os livros e DvDs da sua biblioteca!</h1></marquee>
            </section>

            <footer id="rodape">
                <p>
                    Copyright &copy; 2021 - by ...<br />
                    <a href="https://www.facebook.com/..." target="_blank"><img src="_imagens/facebook.png" width=100 height=100></a>
                    <a href="https://twitter.com/..." target="_blank"><img src="_imagens/twitter.png" width=100 height=100></a>
                </p>
            </footer>
	</body>
</html>



