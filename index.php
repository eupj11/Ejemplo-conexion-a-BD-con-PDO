<?php

require_once 'config/bd.php';
require_once 'operaciones.php';

$conectar = new Conectar();
$db = $conectar->getConnection();

$crud = new CRUD($db);

//Ejemplo de Crete
$crud->insertar("Juan", "Perez", "juan@gmail.com");

//Ejemplo de Read
$profesores = $crud->mostrar();
while($row = $profesores->fetch(PDO::FETCH_ASSOC)) {
    echo "<b>ID: </b>". $row['profesor_id'] . " - Nombre: " . $row['profesor_nombre'] . " - Apellidos: " . $row['profesor_apellidos'] . " - Email: " . $row['profesor_email'] . "<br>";
}


//Ejemplo de Update
//$crud->update(1, "Juan", "Perez", "juan@gmail.com");


//Ejemplo de Delete
//$crud->delete(1);


?>