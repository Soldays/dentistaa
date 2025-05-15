<?php
header('Content-Type: application/json');

$galeria = [
    [
        "url" => "images/gallery1.jpg",
        "titulo" => "Educación en Higiene Oral",
        "descripcion" => "Asesoramiento personalizado para cepillado, hilo dental, enjuagues."
    ],
    [
        "url" => "uploads/gallery2.jpg"
    ],
    [
        "url" => "uploads/gallery3.jpg"
    ]
];

echo json_encode($galeria);
