<!-- 
El Modelo de producto debe tener por lo menos estos atributos:

Nombre
Descripción
Precio
Stock
Pertenecer a una o más categorías.
Tener por lo menos una imagen. -->
<?php
/**
 * TRAER TODOS LOS PRODUCTOS DE LA BASE DE DATOS
 * int $id
 */
include 'conexion.php';
function get_producto($id)
{
    $query = "SELECT *  FROM productos WHERE id=$id";
    return conectame()->$query;
}
get_producto(2);