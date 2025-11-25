<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../admin/models/Card.php';

// Obtener todas las cartas
$cartas = Card::getAll();

echo json_encode(['success' => true, 'cartas' => $cartas]);
