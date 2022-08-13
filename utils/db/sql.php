<?php

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

function getTableColumns($table, $db)
{
    $sql = "SHOW COLUMNS FROM $table";
    $getColumns = mysqli_query($db, $sql);

    $columns = array();
    while ($row = mysqli_fetch_array($getColumns)) {
        array_push($columns, $row['Field']);
    }
    return $columns;
}

function getAllData($table, $db)
{
    $columns = getTableColumns($table, $db);

    $sql = "SELECT * FROM $table order by id ";;

    $result = $db->query($sql);
    $data = array();
    $counter = 0;
    while ($row = $result->fetch_array()) {
        $counter ++;
        $item = null;
        for ($i = 0; $i < count($columns); $i++) {
            $item[$columns[$i]] = $row[$columns[$i]];
        }
        $item['counter'] = "#".$counter;
        array_push($data,$item);
    }

    return $data;
}

?>