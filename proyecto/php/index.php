<?php
$servername = "db";
$username = "user";
$password = "userpass";
$dbname = "midb";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la tabla
$sql = "CREATE TABLE IF NOT EXISTS items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    edad INT NOT NULL
)";
$conn->query($sql);

// Si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["item_name"]) && !empty($_POST["item_age"])) {
    $name = $conn->real_escape_string($_POST["item_name"]);
    $age = (int) $_POST["item_age"];

    $sql = "INSERT INTO items (name, edad) VALUES ('$name', $age)";
    if ($conn->query($sql) === TRUE) {
        echo "Elemento agregado correctamente.<br>";
    } else {
        echo "Error al agregar el elemento: " . $conn->error . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP + MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Agregar un nuevo usuario</h1>
    <form method="POST">
        <input type="text" name="item_name" placeholder="Nombre" required>
        <input type="number" name="item_age" placeholder="Edad" min="0" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Lista de usuarios</h2>
    <ul>
    <?php
    // Consultar y mostrar los elementos
    $sql = "SELECT * FROM items ORDER BY id DESC";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row["id"] . " - Nombre: " . htmlspecialchars($row["name"]) . " - Edad: " . $row["edad"] . "</li>";
        }
    } else {
        echo "<li>No hay usuarios aún.</li>";
    }
    $conn->close();
    ?>
    </ul>
</body>
</html>
