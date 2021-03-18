<?php
require_once "../enlace.php";
$consulta = "SELECT nombre, descripcion, precio FROM articulos ORDER by nombre";
$nombresProducto = array();
$preciosProducto = array();
$descripcionesProducto = array();
if ($sentencia = mysqli_prepare($conn, $consulta)) {

    /* ejecutar la sentencia */
    mysqli_stmt_execute($sentencia);

    /* vincular las variables de resultados */
    mysqli_stmt_bind_result($sentencia, $nombreProducto, $descripProducto, $precioProducto);

    /* obtener los valores */
    while (mysqli_stmt_fetch($sentencia)) {
        array_push($nombresProducto, $nombreProducto);
        $preciosProducto [$nombreProducto] = $precioProducto;
        $descripcionesProducto [$nombreProducto] = $descripProducto;
    }

    /* cerrar la sentencia */
    mysqli_stmt_close($sentencia);
}

/* cerrar la conexión */
mysqli_close($conn);
 ?>

<!------------------------- HTML -------------------------------------------->

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" Content-Type= "text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 id="F" class="card-title">Datos del producto</h5>
                    <form>
                        <fieldset>
                            <legend>Datos del producto</legend>
                            <div class="mb-3">
                                <label for="ClienteSelect" class="form-label">Cliente</label>
                                <select id="ClienteSelect" class="form-select" onchage="cambioCliente();">
                                <?php
                                foreach ($nombres as $name) {
                                    echo '<option value="'+$name+'">'+$name+'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ProductoSelect" class="form-label">Producto</label>
                                <select id="ProductoSelect" class="form-select" onchage="cambioProducto();">
                                <?php
                                foreach ($nombresProducto as  $name) {
                                    echo '<option value="'+$name+'">'+$name+'</option>';
                                }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="CantidadInput" class="form-label">Cantidad</label>
                                <input type="number" id="CantidadInput" class="form-control" placeholder="Unidad">
                            </div>
                            <div class="mb-3">
                                <label for="PrecioInput" class="form-label">Precio</label>
                                <input type="number" id="PrecioInput" class="form-control" placeholder="$ Precio">
                            </div>
                            <div class="mb-3">
                                <label for="DescripcionInput" class="form-label">Descripcion</label>
                                <textarea type="number" id="DescripcionInput" class="form-control" placeholder="...."></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                      Confirmo
                                    </label>
                                </div>
                            </div>
                            <button type="submit" id="btnProducto"  class="btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Productos de la venta</h5>
                    <table class="table table-ligth table-striped">
                        <thead>
                            <tr>
                            <th>hola</th>
                            <th>hola2</th>
                            <th>hola3</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                              ...
                            </tr>
                            <tr>
                              ...
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry the Bird</td>
                              <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-outline-dark">Go somewhere</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script Content-Type="application/javascript" src="venta.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function cambioProducto() {
            var nombre = getElementById("ProductoSelect").value;
            var precios = <?json_encode($preciosProducto) ?>;
            var descripciones = <?json_encode($descripcionesProducto) ?>;

            document.getElementById('PrecioInput').value() = precios[nombre];
            document.getElementById('DescripcionInput').value() = descripciones[nombre];
        }
    </script>
</body>
</html>