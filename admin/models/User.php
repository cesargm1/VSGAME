<?php
require_once __DIR__ . '/Database.php';

class User
{
    public static function create($nombre, $email, $password): bool
    {
        $conn = Connection::conn();
        $query = "INSERT INTO usuarios (nombre, email, password) VALUES (?,?,?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss', $nombre, $email, $precio, $password);

        return $stmt->execute();
    }

    public static function delete(int $usarioId): bool
    {
        $conn = Connection::conn();
        $query = "DELETE FROM usuarios WHERE usuario_id = $usarioId";
        return $conn->query($query);
    }

    public static function actualizar($usuarioId, $nombre, $email, $password): bool
    {
        $conn = Connection::conn();
        $query = "UPDATE usuarios SET nombre = ?, email = ?, password = ? WHERE usuario_id = ? ";


        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssi', $nombre,  $email, $password, $usuarioId);

        return $stmt->execute();
    }
}
