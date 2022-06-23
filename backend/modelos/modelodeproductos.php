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

/**
 * INSERTA UN PRODUCTO EN LA BASE DE DATOS
 */

function insert_producto()
{
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $precio_producto = $_POST['precio_producto'];
    $stock_producto = $_POST['stock_producto'];
    $imagen_producto = $_POST['imagen_producto'];
    $categoria_producto = $_POST['categoria_producto'];


    $query = conectame()->query("INSERT INTO productos(nombre, descripcion, precio, stock, imagen)VALUES ('$nombre_producto', '$descripcion_producto', '$precio_producto', '$stock_producto', '$imagen_producto')");

    /* una vez que inserta los datos recibidos, obtiene el id del producto y lo inserta en la tabla categoriasprocucto para que coincidan unos con otros */

    /*llama a el id del producto insertado*/
    $consulta1 = "SELECT id FROM productos order by 1 desc LIMIT 1";
    $resultado1 = mysqli_query(conectame(), $consulta1);
    if (mysqli_num_rows($resultado1) == 1) {

        $row = mysqli_fetch_array($resultado1);
        $id_producto = $row['id'];
    }

    //le doy un id_producto a la tabla
    $query5 = conectame()->query("INSERT INTO categoriasproductos(id_producto)VALUES('$id_producto')");
    /*agrega id_categoria a el nuevo producto*/
    $query6 = conectame()->query("UPDATE categoriasproductos SET id_categoria = $categoria_producto WHERE id_producto = $id_producto");
}


/**
 * Actualiza los datos de un producto.
 */
function update_producto()
{

    $id_producto = $_GET['id'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $precio_producto = $_POST['precio_producto'];
    $stock_producto = $_POST['stock_producto'];
    $imagen_producto = $_POST['imagen_producto'];
    $categoria_producto = $_POST['categoria_producto'];

    $query = conectame()->query("UPDATE productos SET nombre='$nombre_producto', descripcion='$descripcion_producto', precio ='$precio_producto', stock_producto='$stock_producto',imagen='$imagen_producto' WHERE id=$id_producto");

    $query2 = conectame()->query("UPDATE categoriasproductos SET id_categoria = $categoria_producto WHERE id_producto = $id_producto");
}