<?php
include 'bs_conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO bs_comentarios (nombre, comentario) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $comentario);

    if ($stmt->execute()) {
        echo "Comentario guardado exitosamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
