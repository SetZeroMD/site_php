<?php

class usuario
{
	private$pdo;
	public $msgerro = "";// tudo ok
	public function conectar ($nome, $host, $usuario, $senha){
		global $pdo;
		try {
			
		$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario, $senha);
	} catch (PDOException $e){
		$msgerro = $e-> getmessage();{


	}
	public function cadastrar($nome, $telefone, $email, $senha){
		global $pdo;
		//verificar se ja exixte o email cadastrado
		$sql = $pdo-> prepare("SELECT id_usuario FROM usuarios
			WHERE email = :e");
		$sql->bindvalue(":e",$email);
		$sql->execute();
		if ($sql->rowCount()> 0)
		{
			return false; //ja esta cadastrado

		}
		else
		{
		//caso nao, cadastar
			$sql = $pdo->prepare("INSERT INTO usuarios (nome,telefone,email,senha) VALUES(:n, :t, :e, :s) ");
			$sql->bindvalue(":n",$nome);
			$sql->bindvalue(":t",$telefone);
			$sql->bindvalue(":e",$email);
			$sql->bindvalue(":s",md5$senha));
			$sql->execulte();
			return true;}


	}

	public function logar($email, $senha){
		global $pdo;
		//verificar se o email e senha estao cadastrados, se sim

		$sql = $pdo->prepare("SELECT is_usuario  FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindvalue(":e",$email);
		$sql->bindvalue(":s",md5$senha));
		$sql->execute();
		if ($sql->rowCount()> 0 )
		{
//entar no sistema(sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; //logado com sucesso

		}
		else
		{
			return false;//nao foi possivel logar

		}






	}
}














?>