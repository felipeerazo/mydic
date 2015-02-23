<?php

require_once("./Connection.php");

if ($_POST["method"] === "getWords") {
    $db = new Connection();
    $sql = utf8_encode("SELECT id, word FROM terms;");
    $sqlResult = $db->execute($sql);
    $jsonResult[] = null;
    $i = 0;
    while ($row = mysql_fetch_array($sqlResult)) {
        $jsonResult[$i] = $row;
        $i++;
    }
    mysql_free_result($sqlResult);
    echo json_encode($jsonResult);
} else if ($_POST["method"] === "getHistory") {
    $db = new Connection();
    $sql = utf8_encode("SELECT history FROM terms WHERE id=" + $_POST["param"] + ";");
    $sqlResult = $db->execute($sql);
    $jsonResult[] = null;
    $i = 0;
    while ($row = mysql_fetch_array($sqlResult)) {
        $jsonResult[$i] = $row;
        $i++;
    }
    mysql_free_result($sqlResult);
    echo '1';
}


