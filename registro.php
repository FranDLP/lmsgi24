<?php

$db_host = "localhost";
$db_user = "Fran";
$db_password = "prueba_bd";
$db_name = "mi_base_de_datos"; // Asegúrate de especificar el nombre correcto de la base de datos
$db_table_name = "usuario";

// Conectar a la base de datos usando mysqli
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
    die("No se ha podido conectar a la base de datos: " . mysqli_connect_error());
}

echo "Conexión realizada con éxito";

// Recibir datos del formulario
$form_nombre = $_POST["nombre"];
$form_apellido = $_POST["apellido"];
$form_correo = $_POST["email"];

// Escapar caracteres especiales
$subs_nombre = mysqli_real_escape_string($db_connection, $form_nombre);
$subs_apellido = mysqli_real_escape_string($db_connection, $form_apellido);
$subs_correo = mysqli_real_escape_string($db_connection, $form_correo);

// Preparar la consulta SQL con un marcador de posición
$sql = "SELECT * FROM " . $db_table_name . " WHERE usuario_correo = ?";
$stmt = mysqli_prepare($db_connection, $sql);

// Enlazar el parámetro a la consulta preparada
mysqli_stmt_bind_param($stmt, "s", $subs_correo); // "s" indica que el parámetro es una cadena

// Ejecutar la consulta
mysqli_stmt_execute($stmt);

// Obtener los resultados
$result = mysqli_stmt_get_result($stmt);

// Mostrar los resultados (si existen)
if ($row = mysqli_fetch_assoc($result)) {
    echo "Nombre: " . $row['nombre'] . "<br>";
    echo "Apellido: " . $row['apellido'] . "<br>";
    echo "Correo: " . $row['usuario_correo'] . "<br>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
mysqli_close($db_connection);

?>
