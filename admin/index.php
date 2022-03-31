<?php
$resultado = $_GET['resultado'] ?? null;

include '../includes/config/header.php';


?>


<main class="contenedor">

    <h1 class="text-center">Administrador</h1>
    <?php  if($resultado == 1): ?>
        <a href="#" class="formulario__btn">Modelo registrado</a>
        
    <?php endif; ?>
    <a href="/admin/propiedades/crear.php" class="formulario__btn">Nuevo modelo</a>
</main>

<?php
include '../includes/config/footer.php';
?>