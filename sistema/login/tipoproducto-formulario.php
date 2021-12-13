<?php

include_once "config.php";
include_once "entidades/tipoproducto.php";

$tipoProducto = new TipoProducto();
$tipoProducto->cargarFormulario($_REQUEST);

if($_POST){
    if(isset($_POST["btnGuardar"])){
        if(isset($_GET["id"]) && $_GET["id"] > 0){
              //Actualizo un cliente existente
              //$cliente->actualizar();
        } else {
            //Es nuevo
            $tipoProducto->insertar();
        }
        $msg["texto"] = "Guardado correctamente";
        $msg["codigo"] = "alert-success";

    } else if(isset($_POST["btnBorrar"])){
        $cliente->eliminar();
        header("Location: cliente-listado.php");
    }
} 

include_once("header.php");

?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tipo de productos</h1>
    <?php if (isset($msg)) : ?>
        <div class="row">
            <div class="col-12">
                <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
                    <?php echo $msg["texto"]; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="cliente-listado.php" class="btn btn-primary me-2">Listado</a>
            <a href="cliente-formulario.php" class="btn btn-primary me-2">Nuevo</a>
            <button type="submit" class="btn btn-success me-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="">
        </div>
    </div>
</div>
<?php include_once("footer.php"); ?>