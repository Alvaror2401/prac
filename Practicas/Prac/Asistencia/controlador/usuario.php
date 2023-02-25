<?php
$usuario = new Usuario();

$registro = $usuario->registrar($nombre='codigos', $apellidos='apellidos', $login='admin', $idDepartamento='1', $email='admin@gmail.com', $password='admin', $tipiUsuario='admin', $claveAsistencia='321', $imagen='', $fechaRegistro='');

echo $registro?'registro exitoso':'no se pudo registrar';