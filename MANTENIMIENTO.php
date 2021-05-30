<?php

include("CONEXION.php");

$NoPelicula = $_POST["txtnopeli];
$titulo = $_POST["txttitulo"];
$formato = $_POST["txtformato"];
$genero = $_POST["txtgenero"];
$cantidad= $_POST["txtcant"];


	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	$sqlgrabar = "INSERT INTO pelicula(NoPelicula, titulo, formato, genero, cantidad) values ('$NoPelicula','$titulo','$formato','$genero', '$cantidad')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE pelicula(NoPelicula, titulo, formato, genero, cantidad) values ('$NoPelicula','$titulo','$formato','$genero', '$cantidad')";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM pelicula WHERE NoPelicula=$NoPelicula";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>