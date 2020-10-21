<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require_once 'lib/banco.php';

$smarty = new Smarty();
$paginas = 'extends:inicio.html|menu.html';

if(isset($_GET['modulo'])){

	//Módulo Usuario
	if($_GET['modulo'] == 'usuario'){
		if($_GET['acao'] == 'cadastrar'){
			$paginas = $paginas . '|cadastrar_usuario.html';
		
		}
		if($_GET['acao'] == 'listar'){
			$paginas = $paginas . '|listar_usuario.html';	
			
			$lista  = listarUsuarios();
			$listas = $smarty->fetch("listar_usuario.html");
			$smarty->assign('listas', $listas);
		}
		if($_GET['acao'] == 'atualizar'){
			$paginas = $paginas . '|atualizar_usuario.html';
		
		}
		if($_GET['acao'] == 'excluir'){
			$paginas = $paginas . '|excluir_usuario.html';
		
		}
	}
	//Módulo Refeicao
	else if($_GET['modulo'] == 'refeicao'){
		if($_GET['acao'] == 'cadastrar'){
			$paginas = $paginas . '|cadastrar_refeicao.html';
		}
		if($_GET['acao'] == 'listar'){
			$paginas = $paginas . '|listar_refeicao.html';
		
		}
		if($_GET['acao'] == 'atualizar'){
			$paginas = $paginas . '|atualizar_refeicao.html';
		
		}
		if($_GET['acao'] == 'excluir'){
			$paginas = $paginas . '|excluir_refeicao.html';
		
		}
	}

}

$smarty->display($paginas);

?>