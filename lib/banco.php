<?php

function conectar(){
	
	$conexao = new mysqli('localhost', 'root', '', 'refeitorio');

	return $conexao;
	}

function cadastrarUsuario($usuario, $senha, $nome, $cpf, $email){
	
	$conexao = conectar();
	
	$insert =  "insert into usuario (usuario, senha, nome, cpf, email) values('$usuario','$senha','$nome','$cpf','$email')";
	mysqli_query($conexao, $insert);
	
	 if(mysqli_affected_rows($conexao) > 0){
		echo "<script>alert('Cadastrado com sucesso!!')</script>";
	 }	
	 
}

function listarUsuarios(){
	
	$conexao = conectar();
	
	$select = "select usuario, nome, cpf, email from usuario";
		
	$resultado = mysqli_query($conexao, $select);
		
	$lista = mysqli_fetch_array($resultado);
	
	return $lista;
}

function atualizarUsuario($usuario, $nome,$cpf, $email){
	
	$conexao = conectar();
	
	$update1 =  "update usuario
				set nome = '$nome'
				where usuario = '$usuario'";
				
	$update2 =  "update usuario
				set cpf = '$cpf'
				where usuario = '$usuario'";

	$update3 =  "update usuario
				set email = '$email'
				where usuario = '$usuario'";		
				
	mysqli_query($conexao, $update1);	
	mysqli_query($conexao, $update2);	
	mysqli_query($conexao, $update3);		
	
}

function excluirUsuario($usuario){
	
	$conexao = conectar();
	
	$delete =  "delete from usuario where usuario = '$usuario' ";
	mysqli_query($conexao, $delete);
	
	 if(mysqli_affected_rows($conexao) > 0){
		echo "<script>alert('Usuário excluído com sucesso!!')</script>";
	 }	
}

function cadastrarRefeicao($data, $diasemana, $refeicao, $sobremesa){
	
	$conexao = conectar();
	
	$insert =  "insert into refeicao (data, dia_semana, descricao_cardapio, sobremesa) values('$data','$diasemana','$refeicao','$sobremesa')";
	mysqli_query($conexao, $insert);
	
	 if(mysqli_affected_rows($conexao) > 0){
		echo "<script>alert('Cadastrado com sucesso!!')</script>";
	 }		
}

function atualizarRefeicao($data, $refeicao, $sobremesa){
	
	$conexao = conectar();
	
	$update1 =  "update refeicao
				set descricao_cardapio = '$refeicao'
				where data = '$data'";
				
	$update2 =  "update refeicao
				set and sobremesa = '$sobremesa'
				where data = '$data'";
							
	mysqli_query($conexao, $update1);	
	mysqli_query($conexao, $update2);	
	
}

function excluirRefeicao($data){
	
	$conexao = conectar();
	
	$delete =  "delete from refeicao where data = '$data' ";
	mysqli_query($conexao, $delete);
	
	 if(mysqli_affected_rows($conexao) > 0){
		echo "<script>alert('Refeição excluída com sucesso!!')</script>";
	 }	
}








