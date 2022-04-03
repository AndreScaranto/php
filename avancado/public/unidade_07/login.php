<?php require_once("../../conexao/conexao.php"); ?>

<?php
    $_erro_senha = false;
    if (isset($_POST["usuario"])) {
        $_usuario = $_POST["usuario"];
        $_senha = $_POST["senha"];
    
        session_start();
        $_query_senha = "SELECT * FROM clientes WHERE usuario = '{$_usuario}' AND senha = '{$_senha}'";
        $_resultado_query_senha = mysqli_query($conecta,$_query_senha);
        $_array_resultado = mysqli_fetch_assoc($_resultado_query_senha);
        if (!empty($_array_resultado)) {
            $_SESSION["usuario"]    = $_array_resultado["usuario"];
            $_SESSION["nome"]       = $_array_resultado["nomecompleto"];
            header("location: listagem.php");
        } else {
            $_erro_senha = true;
        }
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>
            <?php if ($_erro_senha) {
                echo "Erro de login, favor tentar novamente";
            }
            ?>
            <div id="janela_login">
                <form action="login.php" method="post">
                    <h2>Tela de Login</h2>
                    <input type="text" name="usuario" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Login">
                </form>
            </div> 
            
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>