<?php session_start() ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>submenu</title>
    </head>
    <body>
        <h3>¿Que cantidad desea adquirir?</h3>
        <form method="POST" action="logica/quantityPruduct.php">
            <br>
            <a><input type="number" id="cantTonico" placeholder="Tonico" name="cantTonico"></a>
            <br>
            <a><input type="number" id="cantJabon" placeholder="Jabon" name="cantJabon"></a>
            <br>
            <a><input type="number" id="cantAceite" placeholder="Aceite" name="cantAceite"></a>
            <br>
            <a><input type="number" id="cantKit" placeholder="Kit de tonico" name="cantKit"></a>
            <br>
            <a><input type="number" id="cantTratamiento" placeholder="Tratamiento" name="cantTratamiento"></a>
            <br>

        </form>
        <a href="menu.php"><button type="submit">Comprar</button></a>
        <a href="menu.php"><button>Cancelar</button></a>
    </body>
</html>
