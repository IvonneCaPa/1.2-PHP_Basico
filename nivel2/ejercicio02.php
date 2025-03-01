<?php

    enum Producto {
        case Chocolate;
        case Chicle;
        case Caramelo;
    }

    $precios = [
        Producto::Chocolate->name => 1.00,
        Producto::Chicle->name => 0.50,
        Producto::Caramelo->name => 1.50,
    ];

    function calcularSubtotal(Producto $producto, int $cantidad): float {
        global $precios;

        return $precios[$producto->name] * $cantidad;
    }

    $total = 0.0;
    $total += calcularSubtotal(Producto::Chocolate, 2);
    $total += calcularSubtotal(Producto::Chicle, 1);
    $total += calcularSubtotal(Producto::Caramelo, 1);

    echo "El total de la compra es: " . $total . " euros." . PHP_EOL;

?>