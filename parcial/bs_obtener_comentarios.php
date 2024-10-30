<?php
include 'bs_conexion.php';

$sql = "SELECT nombre, comentario, fecha FROM bs_comentarios ORDER BY fecha DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>" . htmlspecialchars($row['nombre']) . ":</strong> " . htmlspecialchars($row['comentario']) . "</li>";
    }
} else {
    echo "<li>No hay comentarios aún.</li>";
}

$conn->close();
?>
