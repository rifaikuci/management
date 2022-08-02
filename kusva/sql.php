<?php
require_once "connect.php";

function insert($data, $table)
{
    $sql = "INSERT INTO " . $table . "(";
    $keys = "";
    $values = "";

    foreach ($data as $key => $value) {
        if ($value) {
            $keys = $keys . $key . ", ";
            $values = $values . "'$value'" . ", ";
        }
    }
    $keys = rtrim($keys, " ,");
    $values = rtrim($values, " ,");

    $sql = $sql . $keys . ') VALUES (' . $values . ')';
    return $sql;

}

?>