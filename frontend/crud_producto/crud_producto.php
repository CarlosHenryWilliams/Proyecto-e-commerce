<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <title>CRUD del producto</title>
    
</head>
<style>

  table a {
    text-decoration: none;
    border-radius: 3px;
    border: none;
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 10px;
    padding-right: 10px;
    color: black;
  }

</style>

<body>
<div class="container mt-5">
        <div class="row"> 
                 <!-- formulario -->
                <div class="col-md-3">
                            <h1 class="text-center">CRUD</h1>
                                <form action="" method="">

                                    <input type="text" class="form-control mb-3" placeholder="ID">
                                    <input type="text" class="form-control mb-3" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3"  placeholder="Precio">
                                    <select class="form-control mb-3" >
                                        <option >Talle</option>
                                        <option >XS</option>
                                        <option >S</option>
                                        <option >M</option>
                                        <option >L</option>
                                    </select>

                                    
                                    
                                    <input type="submit" name="Agregar" value="Agregar" class="btn btn-block col-lg-12 col-md-12 col-sm-12 mt-3 "  style=" background-color:#a5d6a7; color: black;">
                                </form>
                </div>
                <!-- formulario -->
   <!-- tabla -->
             <div class="container col-md-8 mt-5">
                <!-- <table class="table  tabla"> -->
                <table class="table table-success table-striped tabla">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">precio</th>
                    <th scope="col">talle</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>  
                    <tr>
                    <th scope="row">1</th>
                    <td>AOC</td>
                    <td>$1111</td>
                    <td>M</td>
                    <td><a class="mx-1 " href="editar_producto.php"><i class="fa-solid fa-pen-to-square editar"></i></a></td>
                    <td><a class="mx-1" href="eliminar_producto.php"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                </tbody>
                </table>


                </div>

                

    <!-- tabla -->
        </div>
</div>
                
</body>
</html>