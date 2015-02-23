
$().ready(function () {
    $("#btnSave").click(function () {

    });
    $.post("../Controlador/WebService.php", {
        metodo: 'getPalabras'
    }, function (data) {
        procesarDatos(data);
    }, "json");
});

function save(){
    
}
