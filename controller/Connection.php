<?php

class Connection {

    private $connection;

    public function Connection() {
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "mydic";
        $this->connection = mysql_connect($db_host, $db_user, $db_password) or die ('Do not could connect to db: ' . mysql_error());
        mysql_select_db($db_name) or die(mysql_error());
    }

    public function execute($sql) {
        $result_query = mysql_query($sql, $this->connection);
        if (!$result_query) {
            die('MySQL Error: ' . mysql_error());
        }
        return $result_query;
    }

    public function execute_procedure($query) {        
        $result_query = mysql_query($query, $this->connection);
        if (!$result_query) {
            die('MySQL Error Procedure: ' . mysql_error());
        }
        return $result_query;
    }

}
?>  
