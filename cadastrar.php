<?php
require_once'usuario.php';
$u = new usuario;
?>

<?php include "menu.php"; ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>projeto php </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="corpo_do_form-card">
    <h1>cadastrar</h1>
<form method="POST">
    <input type="text" name="nome" placeholder="nome_completo" maxlength="40">
    <input type="text" name="telefone" placeholder="telefone" maxlength="30">
    <input type="email" name="usuario" placeholder="usuario" maxlength="40""> 
    <input type="password" name="senha"placeholder="senha"maxlength="32">
    <input type="password" name="confirma_senha" placeholder="confirma_senha"maxlength="32">
    <input type= "submit" value="Cadastrar">
</form>
</div>

<?php
//verificar se clicou no botao
if(isset($_POST['nome'])

    $n = addslashes($_POST['nome']);
    $t = addslashes($_POST['telefone']);
    $e = addslashes($_POST['email']);
    $s = addslashes($_POST['senha']);
    $confirma_senha = addslashes($_POST['confirma_senha']);
    //verificar  se esta preenchido
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirma_senha));

    {
        $u->conectar(
        $hostname = "localhost:3306";
        $bancodedados = "dados_de_login";
        $usuario = "root";
        $senha = "";
    
        if($u->mgserro == "")//se mendage tiver vazia nao deu erro
        {
            if ($senha == $confirma_senha)

            if$u->cadastrar($nome,$telefone,$email,$senha)}
    {
        echo "cadastrado com sucesso! Acesse para entrar";
    }
    {
        else
    }
{
    echo "email ja cadstrado!";
}

        {else

        }

        {
            echo"senha e confirma senha nao correspondem!";
        }

        {
            echo"erro:".$u->msgerro;

        }

    {else}
{
    echo"preencha todos os campos!";
}

}


?>

</form>

    
</body>
</html>