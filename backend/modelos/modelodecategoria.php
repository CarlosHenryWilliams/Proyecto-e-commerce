<?php
include('conexion.php');

function get_categoria_id($id)
{

    $query = "SELECT * FROM `categoria`WHERE categorias.id=$id";

    $conexion = conectame();
    return $conexion->query($query)->fetch_all(MYSQLI_ASSOC);
}

function get_categoria_nombre($id)
{

    $query = "SELECT * FROM `categoria`WHERE categorias.id=$id";

    $conexion = conectame();
    return $conexion->query($query)->fetch_all(MYSQLI_ASSOC);
}