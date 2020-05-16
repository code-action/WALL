<!DOCTYPE html>
<html lang="es">

<?php include("arriba.php");?>

<body>
    <div class="encabezado"></div>
    <div class="lateral">
        <?php include("lateral.php");?>
    </div>
    <div class="centro">
        <div class="dsmall">

            <div class="panel panelModalHeader">
                <h1>Language</h1>
            </div>
            <form method="post" action="../controladores/idioma.php">
                <div class="panel panelModalBody">
                    <div class="group-input">
                        <label for="input-g" class="input-l">Name</label>
                        <input type="hidden" name="bandera" value="guardar">
                        <input class="input-g" type="text" name="idioma" id="idioma" />
                    </div>
                </div>
                <div class="panel panelModalFood">
                    <div class="group-input botones">
                        <button type="submit" class="btn acept">Save</button>
                        <a href="../view/idioma.php">
                            <button type="button" class="btn cancel">Cancelar</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<?php include("abajo.php");?>

</html>