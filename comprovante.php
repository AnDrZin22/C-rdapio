<?php
// Define prices
$prices = [
    "opcao1" => 9.50,  // X-Burguer
    "opcao2" => 13.50, // X-Salada
    "opcao3" => 17.50, // X-Egg Duplo
    "bebida1" => 6.50, // Coca Cola Lata
    "bebida2" => 9.00, // Cerveja Heineken
    "bebida3" => 4.50   // Limonada
];

// Initialize total cost
$total = 0;
$orderDetails = [];

// Process sandwich orders
foreach (["opcao1", "opcao2", "opcao3"] as $option) {
    if (isset($_POST[$option]) && $_POST[$option] == "on") {
        $quantity = (int)$_POST["quantidade" . substr($option, -1)];
        if ($quantity > 0) {
            $cost = $prices[$option] * $quantity;
            $total += $cost;
            $orderDetails[] = ucfirst($option) . " - Quantidade: $quantity - Valor: R$" . number_format($cost, 2, ',', '.');
        }
    }
}

// Process drink orders
foreach (["bebida1", "bebida2", "bebida3"] as $option) {
    if (isset($_POST[$option]) && $_POST[$option] == "on") {
        $quantity = (int)$_POST["quantidade_" . substr($option, -1)];
        if ($quantity > 0) {
            $cost = $prices[$option] * $quantity;
            $total += $cost;
            $orderDetails[] = ucfirst($option) . " - Quantidade: $quantity - Valor: R$" . number_format($cost, 2, ',', '.');
        }
    }
}

// Get observations
$observations = isset($_POST['obs']) ? htmlspecialchars($_POST['obs']) : "Nenhuma observação.";

// HTML output
?>
