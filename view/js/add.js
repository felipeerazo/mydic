
$().ready(function () {
    $("#btnSave").click(function () {
        $.post("../controller/WebService.php", {
            method: 'insertTerm',
            param:"'"+$("#txtWord").val()+"', '"+$("#txtHistory").val()+"'"
        }, function (data) {
            console.log(data);
        }, "html");
    });

});

function save(){
    
}
