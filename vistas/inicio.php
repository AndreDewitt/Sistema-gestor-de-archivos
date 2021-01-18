<?php
session_start();
if (isset($_SESSION['usuario'])) {
	include "header.php";
	?>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
					<h1 class="display-4">Gestor de Archivos</h1>
					<p class="lead">Este es un gestor de archivos para Topicos de MVC</p>
					<hr class="my-4">
					<img src="../img/gestor.png" class="rounded mx-auto d-block" style="max-width:100%;">
					<hr class="my-4">
					<p class="text-center">by Mendoza Flores Andres</p>
				</div>
			</div>
		</div>
	</div>


	<?php
	include "footer.php";

}else{
	header("Location:../index.php");
}
?>
