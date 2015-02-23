
$().ready(function () {
    $.post("../controller/WebService.php", {
        method: "getWords"
    }, function (data) {
        printWordList(data);
    }, "json");
});

function printWordList(data) {
    var result = "";
    $.each(data, function (i, row) {
        result = result + "<li><a href='#pagetwo' data-transition='slide' onclick='callGetHistory("+row["id"]+")'>" + row["word"] + "</a></li>";
    });
    $("#wordList").html(result);
    $("#wordList").listview("refresh");
}

function callGetHistory(id) {
    $.post("../controller/WebService.php", {
        method: "getHistory",
        param:id
    }, function (data) {
        printHistory(data[0]["word"], data[0]["history"]);
    }, "json");
}

function printHistory(word, history) {
    $("#history").html("<dl><dt>"+word+"</dt><dd>"+history+"</dd></dl>");
}