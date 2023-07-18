
<?php 
    foreach($alertas as $key => $alertas) {
        foreach($alertas as $mensaje) {
?>
    <div class="alerta alerta__<?php echo $key; ?>"><?php echo $mensaje; ?></div>

<?php
        }
    }
?>