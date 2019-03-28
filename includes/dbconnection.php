<?php
$conn = mysqli_connect('localhost', 'root', '', 'daily_college');

function update($table, $tableId, $data)
{
    global $conn;
    $set = "";
    foreach ($data as $key => $value) {
        $set .= "`$key` = '$value',";
    }
    $set = rtrim($set, ',');

    $query = "Update $table set $set where {$table}_id=$tableId";
    $result = mysqli_query($conn, $query);
    return ($result) ? true : false;
}

function create($table, $data)
{
    global $conn;
    $fields = $values = array();
    foreach (array_keys($data) as $key) {
        $fields[] = "`$key`";
        $values[] = "'" . mysqli_real_escape_string($conn, $data[$key]) . "'";
    }
    $fields = implode(",", $fields); //implode is used to convert the array to stringecho
    //echo $fields;
    $values = implode(",", $values);
    //echo $values;
    $query = "Insert into $table ($fields) VALUES ($values)";
    //echo $query;

    $result = mysqli_query($conn, $query);
    return ($result) ? true : false;
}

function delete($table, $tableId)
{
    global $conn;
    $query = 'delete from ' . $table . ' where ' . $table . '_id =' . $tableId . '';
    $result = mysqli_query($conn, $query);
    return ($result) ? true : false;
}


function select($table, $key)
{
    global $conn;
    $query = "select $key from $table";
    $rsResult = mysqli_query($conn, $query);
    return (mysqli_num_rows($rsResult) > 0) ? mysqli_fetch_all($rsResult) : false;
}
