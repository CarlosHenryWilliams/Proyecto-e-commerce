<?php

include('../modelos/modelodecategoria.php');

/**
 * Obtiene los detalles de un producto segun su ID.
 */
$id = $_GET['id'];
get_producto($id);