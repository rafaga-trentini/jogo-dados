<!DOCTYPE html>
<?php 
    $somaUsuario = 0;
    $somaComputador = 0;
    $usuarioDado1 = 0;
    $usuarioDado2 = 0;
    $computadorDado1 = 0;
    $computadorDado2 = 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Dados</title>
</head>
<body>
    <?php  
        $somaUsuario = $usuarioDado1 + $usuarioDado2;
        $somaComputador = $computadorDado1 + $computadorDado2;
    ?>
    <button name="lancarDados" id="lancarDados" >Jogar</button>
    <?php
        $usuarioDado1 = rand(1, 6);
        $usuarioDado2 = rand(1, 6);

        $computadorDado1 = rand(1, 6);
        $computadorDado2 = rand(1, 6);
    ?>

</body>
</html>