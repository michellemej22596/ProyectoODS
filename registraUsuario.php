<?php 
include 'php/estableceConexion.php';

$nombreColaborador=$_POST['nombreColaborador'];
$us_colaborador=$_POST['us_colaborador'];
$us_contra=password_hash($_POST['us_contra'], PASSWORD_DEFAULT);
$us_email=$_POST['us_email'];

$instruccion="INSERT INTO usuarios (idUser, name, user, password, email) VALUES (NULL, '$nombreColaborador', '$us_colaborador','$us_contra', '$us_email')";

mysqli_query($estableceConexion, $instruccion);

header('location: index.php');
 ?>