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
 * OBTIENE UN PRODUCTO DE LA BASE DE DATOS SEGUN SU ID.
 * int $id
 */
include 'conexion.php';

function get_producto($id)
{

    $query = "SELECT * FROM `productos` INNER JOIN categoriasproductos ON productos.id = categoriasproductos.id_producto
        INNER JOIN categorias ON categorias.id = categoriasproductos.id_categoria WHERE categoriasproductos.id_producto=$id";

    $conexion = conectame();
    return $conexion->query($query)->fetch_all(MYSQLI_ASSOC);
}