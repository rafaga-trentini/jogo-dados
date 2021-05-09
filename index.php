<!DOCTYPE html>
<?php 
    $somaUsuario = 0;
    $somaComputador = 0;
    $usuarioDado1 = 0;
    $usuarioDado2 = 0;
    $computadorDado1 = 0;
    $computadorDado2 = 0;

    function gerarValorDados() {
        $usuarioDado1 = rand(1, 6);
        $usuarioDado2 = rand(1, 6);

        $computadorDado1 = rand(1, 6);
        $computadorDado2 = rand(1, 6);
    }

    function gerarImagemDados($numero) {
        switch($numero) {
            case 1:
                echo "<img src=\"images/Lado1.png\" alt=\"\">";
                break;
            case 2:
                echo "<img src=\"images/Lado2.png\" alt=\"\">";
                break;
            case 3:
                echo "<img src=\"images/Lado3.png\" alt=\"\">";
                break;
            case 4:
                echo "<img src=\"images/Lado4.png\" alt=\"\">";
                break;
            case 5:
                echo "<img src=\"images/Lado5.png\" alt=\"\">";
                break;
            case 6:
                echo "<img src=\"images/Lado6.png\" alt=\"\">";
                break;
        }
    }

    if ($_POST['lancarDados'] == "Jogar") {
        $usuarioDado1 = rand(1, 6);
        $usuarioDado2 = rand(1, 6);
        $somaUsuario = $usuarioDado1 + $usuarioDado2;

        $computadorDado1 = rand(1, 6);
        $computadorDado2 = rand(1, 6);
        $somaComputador = $computadorDado1 + $computadorDado2;
    }
?>
<html lang="pt-BR">

<style>

.div-usuario {
    display: inline-block;
    width: 45%;
    position: relative;
    left: 0;
    text-align: center;

}

.div-computador {
    display: inline-block;
    width: 45%;
    position: relative;
    right: 0;
    text-align: center;
}

.botao-jogar {
    width: 100px;
    height: 80px;
    position: relative;
    left: 42%;
    font-size: 20px;
}


</style>
<head>
    <meta charset="UTF-8">
    <title>Jogo de Dados</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="hidden" name="podeLancar">
        <input type="submit" class="botao-jogar" name="lancarDados" id="lancarDados" value="Jogar">
    </form>
    
    <div class="div-usuario">
        <h1>Dados do Usuario</h1>
        <?php 
            gerarImagemDados($usuarioDado1);
            gerarImagemDados($usuarioDado2);
            echo "<br/>";
            echo "<h2>Resultado $somaUsuario</h2>"

        ?>
    </div>

    <div class="div-computador">
        <h1>Dados do Computador</h1>
        <?php 
            gerarImagemDados($computadorDado1);
            gerarImagemDados($computadorDado2);
            echo "<br/>";
            echo "<h2>Resultado $somaComputador</h2>"
        ?>
    </div>
</body>
</html>