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
$id = 1;
function get_producto($id)
{

    $query = "SELECT * FROM `productos` INNER JOIN categoriasproductos ON productos.id = categoriasproductos.id_producto
        INNER JOIN categorias ON categorias.id = categoriasproductos.id_categoria WHERE categoriasproductos.id_producto=$id";
    return conectame()->$query;
}
get_producto($id);