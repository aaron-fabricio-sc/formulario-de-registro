<?php

$conex = mysqli_connect("localhost", "root", "", "formulario_asesores");
if (mysqli_connect_errno()) {
    echo "conexion fallida: ", mysqli_connect_errno();
    exit();
} else {
}
