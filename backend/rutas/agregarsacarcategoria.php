<?php

include('../modelos/modelodecategoria.php');

/**
 * agrega categoria s o saca segun id.
 */
$id = $_GET['id'];

delete_producto($id);
insert_producto();