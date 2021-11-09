<?php
    require_once'classe/usuario.php';
    $u = new usuario;

?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>projeto php </title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="corpo_do_form-card">
    <h1>cadastrar</h1>
<form method="post">
    <input type="text" name="nome" placeholder="nome completo" maxlength="40">
    <input type="text" name="telefone" placeholder="telefone" maxlength="30">
    <input type="email" name="usuario" placeholder="usuario" maxlength="40""> 
    <input type="password" name="senha"placeholder="senha"maxlength="32">
    <input type="password" name="confirma_senha" placeholder="confirma_senha"maxlength="32">
    <input type= "submit" value="Cadastrar">
    
</div>

<?php
//verificar se clicou no botao
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome'];
    $telefone = addslashes($_POST['telefone'];
    $email = addslashes($_POST['email'];
    $senha = addslashes($_POST['senha'];
    $confirma_senha = addslashes($_POST['confirma_senha']);
    //verificar  se esta preenchido
    if(!empty($nome)) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirma_senha))
    {
        $u->conectar("dados_de_login","localhost:","root","pF2MwxyZ");

        //$dns="mysql:host=localhost;dbname=dados_de_login";$usuario="root"
            //$senha="pf2MwxyZ"
            //$conexao = new PDO($dns,$usuario,$senha);
            //conexao->query("inset into usuarios('usuario','senha') values('adimin','admin')

        if($u->mgserro == "")//se menssage tiver vazia nao deu erro
        {
            if ($senha == $confirma_senha)

            if$u->cadastrar($nome,$telefone,$email,$senha))
    {
        echo "cadastrado com sucesso! Acesse para entrar";
    }
    {
        else
    }
{
    echo "email ja cadstrado!";
}

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