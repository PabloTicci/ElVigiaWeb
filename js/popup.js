window.onload = function() {
    var mensaje = "<?php echo $mensaje; ?>";
    if (mensaje) {
        alert(mensaje); // Muestra un popup con el mensaje
    }
};