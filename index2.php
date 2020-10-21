<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require_once 'lib/banco.php';

	if(isset($_POST['cadastrarUsuario'])){

		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		
		 cadastrarUsuario($usuario, $senha, $nome, $cpf, $email);
		 require_once("index.php");
		}
	else if(isset($_POST['atualizarUsuario'])){
		
		$usuario = $_POST['usuarioAtualizar'];
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$email = $_POST['email'];
		
		atualizarUsuario($usuario, $nome,$cpf, $email);
		require_once("index.php");
		
	}
	else if(isset($_POST['excluirUsuario'])){ 
	
			$usuario = $_POST['usuarioExcluir'];
			
			excluirUsuario($usuario);
			require_once("index.php");
		
	}
	else if(isset($_POST['cadastrarRefeicao'])){				
				$data = $_POST['data'];
				$diasemana = $_POST['dia_semana'];
				$refeicao = $_POST['refeicao'];
				$sobremesa = $_POST['sobremesa'];
				
				cadastrarRefeicao($data, $diasemana, $refeicao, $sobremesa);
				require_once("index.php");
			
	}
	else if(isset($_POST['atualizarRefeicao'])){				
				$data = $_POST['data'];
				
				$refeicao = $_POST['refeicao'];
				$sobremesa = $_POST['sobremesa'];
				
				atualizarRefeicao($data, $refeicao, $sobremesa);
				require_once("index.php");
			
	}
	else if(isset($_POST['excluirRefeicao'])){				
				$data = $_POST['data'];
				
				excluirRefeicao($data);
				require_once("index.php");
			
	}
	
	
?>