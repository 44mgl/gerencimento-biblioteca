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
			<marquee><h1>Cadastre seus livros e acesse-os quando quiser!</h1></marquee>
			
			<table class="opmenu">
				<tr>
					<td><a href="cadastrar-livros.php">Cadastrar Livros</a></td>
					<td><a href="editar-livros.php">Editar Livros</a></td>
					<td><a href="deletar-livro.php">Deletar Livros</a></td>
				</tr>
			</table>
			<?php
                require_once("conexao.php");
                $sql="SELECT * FROM tb_livro order by cd_livro" or die('Erro ao selecionar dados!');
				$query=mysqli_query($conexao,$sql);
				$total = mysqli_num_rows($query);
                 echo '<table border="1" cellpadding="8" cellspacing="0">';
						echo '<tr>
								<th>Código</th>
								<th>ISBN</th>
								<th>Livro</th>
								<th>Autor</th>
								<th>Descrição</th>
								</tr>';
				while($result = mysqli_fetch_assoc($query)) {
						echo '<tr>';
						echo '<td>' . $result['cd_livro'] . '</td>';
						echo '<td>' . $result['cd_isbn'] . '</td>';
						echo '<td>' . $result['nm_livro'] . '</td>';
						echo '<td>' . $result['nm_autor'] . '</td>';
						echo '<td>' . $result['ds_livro'] . '</td>';
						echo '</tr>';
					}
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


