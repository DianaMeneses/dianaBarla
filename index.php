<!DOCTYPE html>
<?php session_start() ?>
<?php include 'myClass/userClass.php' ?>
<?php use Barla\userSystem as user ?>
<?php $userSystem = new user\userClass() ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bienvendia</title>
    </head>
    <body>
        <form action="logica/user.php" method="POST">
            <input type="text" id="user" name="user" placeholder="Usuario">
            <br>
            <input type="password" id="pass" name="pass" placeholder="Contraseña">
            <br>
            <br>
            <input type="submit" id="Registrar" value="Registrar">
            <?php if ($userSystem->errorUser() === true): ?>
            <a><p>Usuario y contraseña incorrectos</p></a>
            <?php endif ?>
        </form>
    </body>
</html>