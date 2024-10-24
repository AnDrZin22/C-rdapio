<?php

$prices = [
    "quantidade1" => 9.50,  // X-Burguer
    "quantidade2" => 13.50, // X-Salada
    "quantidade3" => 17.50, // X-Egg Duplo
    "quantidade_bebida1" => 6.50, // Coca Cola Lata
    "quantidade_bebida2" => 9.00, // Cerveja Heineken
    "quantidade_bebida3" => 4.50   // Limonada
];


$total = 0;
$orderDetails = [];


for ($i = 1; $i <= 3; $i++) {
    $quantidade = isset($_POST["quantidade$i"]) ? (int)$_POST["quantidade$i"] : 0;
    if ($quantidade > 0) {
        $item = "Lanche $i"; 
        $valor = $prices["quantidade$i"] * $quantidade;
        $total += $valor;
        $orderDetails[] = "$item - Quantidade: $quantidade - Valor: R$" . number_format($valor, 2, ',', '.');
    }
}


for ($i = 1; $i <= 3; $i++) {
    $quantidade = isset($_POST["quantidade_bebida$i"]) ? (int)$_POST["quantidade_bebida$i"] : 0;
    if ($quantidade > 0) {
        $item = "Bebida $i";
        $valor = $prices["quantidade_bebida$i"] * $quantidade;
        $total += $valor;
        $orderDetails[] = "$item - Quantidade: $quantidade - Valor: R$" . number_format($valor, 2, ',', '.');
    }
}


echo "<h2>Comprovante de Pedido</h2>";
echo "<table border='1'>
        <tr>
            <th>Item</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>";
foreach ($orderDetails as $detail) {
    echo "<tr><td>$detail</td></tr>";
}
echo "</table>";
echo "<div><strong>Total: R$" . number_format($total, 2, ',', '.') . "</strong></div>";
?>
