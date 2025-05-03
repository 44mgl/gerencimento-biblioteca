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
                        
           <form class="formulario" method="POST">
				<h1> Cadastrar Livros </h1>
				ISBN: <input type="text" size="50" maxlength="13" name="isbn"><br>
				Nome: <input type="text" size="50" maxlength="100" name="nome"><br>
				Autor: <input type="text" size="50" maxlength="30" name="autor"><br>
				Descrição: <textarea rows="10" cols="40" name="desc"></textarea><br>
				<input type="submit" value="Salvar" name="btnenviar">
			</form>
			<?php
				require_once("conexao.php");

				$busca = '';
				if (isset($_POST['busca']) && !empty($_POST['busca'])) {
					$busca = mysqli_real_escape_string($conexao, $_POST['busca']);
					$sql = "SELECT * FROM tb_livro 
							WHERE nm_livro LIKE '%$busca%' 
							OR nm_autor LIKE '%$busca%' 
							OR ds_livro LIKE '%$busca%' 
							OR cd_isbn LIKE '%$busca%' 
							ORDER BY cd_livro";
				} else {
					$sql = "SELECT * FROM tb_livro ORDER BY cd_livro";
				}

				$query = mysqli_query($conexao, $sql);
				$total = mysqli_num_rows($query);
				?>
<?php
    include('conexao.php');
    if(isset($_POST['btnenviar'])) {
        $isbn = $_POST['isbn'];
        $nome = $_POST['nome'];
        $autor = $_POST['autor'];
        $desc = $_POST['desc'];
        $sql = "INSERT INTO tb_livro (cd_isbn, nm_livro, nm_autor, ds_livro) 
                VALUES ('$isbn', '$nome', '$autor', '$desc')";
        $result = mysqli_query($conexao, $sql);
        if($result) {
            echo "Seu cadastro foi realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conexao);
        }
    }
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
