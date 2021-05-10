<!DOCTYPE html>
<?php 
    $somaUsuario = 0;
    $somaComputador = 0;
    $usuarioDado1 = 0;
    $usuarioDado2 = 0;
    $computadorDado1 = 0;
    $computadorDado2 = 0;
    $mostrarResultado = false;
    $lancarDados = isset($_POST['lancarDados']) ? true : false;
    $vencedor = "";

    function gerarImagemDados($numero) {
        switch($numero) {
            case 1:
                echo "<img src=\"images/Lado1.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 2:
                echo "<img src=\"images/Lado2.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 3:
                echo "<img src=\"images/Lado3.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 4:
                echo "<img src=\"images/Lado4.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 5:
                echo "<img src=\"images/Lado5.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 6:
                echo "<img src=\"images/Lado6.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            default:
                echo "<img src=\"\" alt=\"\">";
                break;
        }
    }
    
    if ($lancarDados) {
        $usuarioDado1 = rand(1, 6);
        $usuarioDado2 = rand(1, 6);
        $somaUsuario = $usuarioDado1 + $usuarioDado2;

        $computadorDado1 = rand(1, 6);
        $computadorDado2 = rand(1, 6);
        $somaComputador = $computadorDado1 + $computadorDado2;

        if ($somaUsuario > $somaComputador) {
            $mostrarResultado = true;
            $vencedor = "usuario";
        } elseif ($somaUsuario < $somaComputador) {
            $mostrarResultado = true;
            $vencedor = "computador";
        } else {
            $mostrarResultado = true;
            $vencedor = "empate";
        }
        $lancarDados = false;
    }
?>
<html lang="pt-BR">

<style>

body {
    background-image: url("images/mesa.jpg");
}

.div-usuario {
    display: inline-block;
    width: 40%;
    position: relative;
    left: 5px;
    text-align: center;
}

.div-computador {
    display: inline-block;
    width: 40%;
    position: relative;
    right: -5px;
    text-align: center;
}

.div-resultado {
    display: inline-block;
    width: 15%;
    position: relative;
    top: -75px;
    left: 30px;
}

.div-resultado p{
    color: white;
    font-size: 28px;
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
        <input type="hidden" name="podeLancar" value = "teste">
        <input type="submit" class="botao-jogar" name="lancarDados" id="lancarDados" value="Jogar">
    </form>
    
    <div class="div-usuario">
        <h1 style="color: white;">Dados do Usuario</h1>
        <?php 
            gerarImagemDados($usuarioDado1);
            gerarImagemDados($usuarioDado2);
            echo "<br/>";
            echo "<h2 style=\"color: white;\">Resultado $somaUsuario</h2>"

        ?>
        
    </div>
    
    <div class="div-resultado">
        <?php
            if ($mostrarResultado) {
                switch($vencedor) {
                    case "usuario":
                        echo "<p>Você venceu</p>";
                        $mostrarResultado = false;
                        break;
                    case "computador":
                        echo "<p>Você perdeu</p>";
                        $mostrarResultado = false;
                        break; 
                    case "empate":
                        echo "<p>Empate</p>";
                        $mostrarResultado = false;
                        break; 
                }

            }
        ?>
    </div>
    
    <div class="div-computador">
        <h1 style="color: white;">Dados do Computador</h1>
        <?php 
            gerarImagemDados($computadorDado1);
            gerarImagemDados($computadorDado2);
            echo "<br/>";
            echo "<h2 style=\"color: white;\">Resultado $somaComputador</h2>"
        ?>
    </div>
</body>
</html>