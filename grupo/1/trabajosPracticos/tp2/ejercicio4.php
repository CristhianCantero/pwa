<?php
$Titulo = "Ejercicio 4";
include_once("../../header.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ejercicio 4</h5>
            <p class="card-text">
                Realizar un formulario web para cargar contactos que se registren en el sitio desarrollado.
                Dichos contactos se pedirán para enviar màs informaciòn asociada a la pàgina.
            </p>
            <p class="card-text">
                Para la lógica del formulario se pueden realizar validaciones al momento de cargarlo o bien
                al presionar el botón "Enviar" se deberán validar los datos en cliente.
            </p>
            <p class="card-text">
                Específicamente usando AJAX debe validar que el usuario ingresado no exista ya en la
                base de datos. Esta validación debe realizarse al producirse el evento “change” del input
                Usuario.

            </p>
            <p class="card-text">
                En cualquier caso, si algún campo es erróneo, se deben resaltar de algún modo el/los
                campos con errores y su mensaje de error correspondiente. Si no existen errores, se
                enviarán los datos al servidor y se cargarán en la base de datos. Si todo ha salido bien en el
                servidor, se envía al cliente la cadena "Ok"; caso contrario se enviará un "Error". Para
                finalizar, el cliente deberá mostrar un mensaje de error o confirmación según corresponda.
            </p>
        </div>
    </div>
    <hr>
    <h2 align="center">Registro de Usuarios</h2>
    <form id="formulario" class="mb-2 col-4 needs-validation" style="margin: auto;" method="POST">
        <label for="nombre" class="form-label">Nombre:</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="nombre">
        </div>
        <label for="empresa" class="form-label">Empresa:</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="empresa">
        </div>
        <label for="telefono" class="form-label">Telefono:</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="telefono">
        </div>
        <label for="email" class="form-label">Email:</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="email">
        </div>
        <label for="comentarios" class="form-label">Comentarios:</label>
        <div class="input-group mb-3">
            <textarea class="form-control" id="comentarios"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button" onclick="Verificacion();">Enviar</button>
            <button class="btn btn-danger" type="reset">Borrar</button>
        </div>
    </form>
</div>

<?php
$archivo = "ejercicio4.js";
include_once("../../footer.php")
?>