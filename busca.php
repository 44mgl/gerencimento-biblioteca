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
			<marquee><h1>Cadastre seus livros e DvDs e acesse-os quando quiser!</h1></marquee>
			<?php
require_once("conexao.php");

$busca = "";
if (isset($_POST['busca']) && !empty(trim($_POST['busca']))) {
    $busca = mysqli_real_escape_string($conexao, $_POST['busca']);

    // Consulta livros
    $sqlLivros = "SELECT * FROM tb_livro 
                  WHERE nm_livro LIKE '%$busca%' 
                     OR nm_autor LIKE '%$busca%' 
                     OR cd_isbn LIKE '%$busca%' 
                     OR ds_livro LIKE '%$busca%' 
                  ORDER BY cd_livro";

    // Consulta DVDs
    $sqlDVDs = "SELECT * FROM tb_dvd 
                WHERE nm_dvd LIKE '%$busca%' 
                   OR nm_autor LIKE '%$busca%' 
                   OR cd_isbn LIKE '%$busca%' 
                   OR ds_dvd LIKE '%$busca%' 
                ORDER BY cd_dvd";
} else {
    // Sem busca: exibe tudo
    $sqlLivros = "SELECT * FROM tb_livro ORDER BY cd_livro";
    $sqlDVDs = "SELECT * FROM tb_dvd ORDER BY cd_dvd";
}

$queryLivros = mysqli_query($conexao, $sqlLivros);
$queryDVDs = mysqli_query($conexao, $sqlDVDs);

// Exibir livros
echo '<h2>Livros</h2>';
if (mysqli_num_rows($queryLivros) > 0) {
    echo '<table border="1" cellpadding="8" cellspacing="0">';
    echo '<tr><th>Código</th><th>ISBN</th><th>Livro</th><th>Autor</th><th>Descrição</th></tr>';
    while ($livro = mysqli_fetch_assoc($queryLivros)) {
        echo '<tr>';
        echo '<td>' . $livro['cd_livro'] . '</td>';
        echo '<td>' . $livro['cd_isbn'] . '</td>';
        echo '<td>' . $livro['nm_livro'] . '</td>';
        echo '<td>' . $livro['nm_autor'] . '</td>';
        echo '<td>' . $livro['ds_livro'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'Nenhum livro encontrado.<br>';
}
$total = mysqli_num_rows($queryLivros);
echo '</table>';
echo 'Fim da Listagem de Livros<br>';
echo 'Total de livros cadastrados = '.$total;

// Exibir DVDs
echo '<h2>DVDs</h2>';
if (mysqli_num_rows($queryDVDs) > 0) {
    echo '<table border="1" cellpadding="8" cellspacing="0">';
    echo '<tr><th>Código</th><th>DVD</th><th>Diretor</th><th>Descrição</th></tr>';
    while ($dvd = mysqli_fetch_assoc($queryDVDs)) {
        echo '<tr>';
        echo '<td>' . $dvd['cd_dvd'] . '</td>';
        echo '<td>' . $dvd['ds_dvd'] . '</td>';
        echo '<td>' . $dvd['nm_dvd'] . '</td>';
        echo '<td>' . $dvd['nm_autor'] . '</td>';
        echo '<td>' . $dvd['ds_dvd'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'Nenhum DVD encontrado.<br>';
}
                $total = mysqli_num_rows($queryDVDs);
                echo '</table>';
                echo 'Fim da Listagem de Livros<br>';
                echo 'Total de livros cadastrados = '.$total;
				?>
                </section>

<footer id="rodape">
    <p>
        Copyright &copy; 2025 - by ...<br />
        <a href="https://www.facebook.com/..." target="_blank"><img src="_imagens/facebook.png" width=100 height=100></a>
        <a href="https://twitter.com/..." target="_blank"><img src="_imagens/twitter.png" width=100 height=100></a>
    </p>
</footer>
</body>
</html>

