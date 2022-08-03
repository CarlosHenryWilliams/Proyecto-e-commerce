<?php

include('../modelos/modelodecategoria.php');

/**
 * agrega categoria s o saca segun id.
 */
$id = $_GET['id'];

delete_categoria($id);
insert_categoria();