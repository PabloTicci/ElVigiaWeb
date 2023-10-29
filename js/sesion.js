function validateForm() {
    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("clave").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../referencias/validacion.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if (xhr.responseText === "success") {
                // Las credenciales son correctas, redirige al usuario
                window.location.href = "upload.php";
            } else {
                alert("Credenciales incorrectas. Inténtalo de nuevo.");
            }
        }
    };

    var data = "usuario=" + usuario + "&clave=" + clave;
    xhr.send(data);

    return false;
}