<?php


$quantidade1 = $_POST["quantidade1"];// xburguer
$quantidade2 = $_POST["quantidade2"];// misto quente
$quantidade3 = $_POST["quantidade3"];// x egg
$quantidade4 = $_POST["quantidade4"];// coca cola
$quantidade5 = $_POST["quantidade5"];// heineken
$quantidade6 = $_POST["quantidade6"];//limonada
$obs = $_POST["obs"]; //obs
$ValorTotal = 0.00;

if (isset($_POST["opcao6"])) {
    $ValorTotal = 5.50 * $quantidade6;
}
    echo "pedido realizado com sucesso!<br>";
    echo "Sua conta ficou em R$: ", $ValorTotal;
    echo "Obs ", $obs;
    echo "<br><a href= 'Cardápio.html'>Voltar</a>";
    ?>

