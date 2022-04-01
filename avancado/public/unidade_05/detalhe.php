<?php  ?>
<?php
    // testa se o parâmetro produtoID foi passado
    if ( isset( $_GET["produtoID"] ) ) {
        // pega o valor do produtoID e conecta ao banco de dados
        $_produtoID = $_GET["produtoID"];
        require_once("../../conexao/conexao.php");
    } else {
        // redireciona para a página de listagem
        Header("Location: listagem.php");
    }
    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    // Get produtoID da página de listagem
    

    // Consulta ao banco de dados
    $produtos = "SELECT * \n";
    $produtos .= "FROM produtos \n";
    $produtos .= "WHERE produtoID = " . $_produtoID;
    $detalhe = mysqli_query($conecta, $produtos);
    if (!$detalhe) {
        die("Falha na consulta ao banco");   
    } else {
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
    }


?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main>
            <div id="detalhe_produto">
                <ul>
                    <li> <img class="imagem" src="<?php echo $dados_detalhe["imagemgrande"]; ?>" > </li>
                    <li><h2><?php echo $dados_detalhe["nomeproduto"]; ?></h2></li>
                    <li>Descrição: <?php echo $dados_detalhe["descricao"]; ?></li>
                    <li>Código de barra: <?php echo $dados_detalhe["codigobarra"]; ?></li>
                    <li>Tempo de entrega: <?php echo $dados_detalhe["tempoentrega"]; ?> dias</li>
                    <li>Preço de revenda: <?php echo real_format($dados_detalhe["precorevenda"]); ?></li>
                    <li>Preço unitário: <?php echo real_format($dados_detalhe["precounitario"]); ?></li>
                    <li>Estoque: <?php echo $dados_detalhe["estoque"]; ?></li>
                
                </ul>
            </div> 
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>