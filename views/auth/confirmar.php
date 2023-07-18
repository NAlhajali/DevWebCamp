<main class="auth">
<h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Tu Cuenta DevWebcamp</p>

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <div class="acciones--centrar">
        <a href="/login" class="acciones__enlace">Iniciar Sesión</a>
    </div>
</main>