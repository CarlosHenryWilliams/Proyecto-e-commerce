<?php

include('../modelos/modelodecategoria.php');

/**
 * ELIMINA UNA CATEGORIA POR SU ID RECIBIENDO EL DATO POR GET
 */
$id = $_GET['id'];
delete_categoria($id);