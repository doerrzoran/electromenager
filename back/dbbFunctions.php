<?php

require_once "connectToDatabase.php";
 
 function selectFromDatabase($table, $key, $data, $conn){
    $query = "SELECT * FROM $table WHERE $key = '$data'";
    $result = pg_query($conn, $query);
    $row = pg_fetch_row($result);
    return $row;
  }

  function selectFromDatabaseAnd($table, $key1, key2, $data1, data2 $conn){
    $query = "SELECT * FROM $table WHERE $key1 = '$data1' AND $key2 = '$data2";
    $result = pg_query($conn, $query);
    $row = pg_fetch_row($result);
    return $row;
  }


  function insertIntoDatabase($table, $key, $data, $conn){
    $query = "INSERT INTO $table ($key) VALUES ($data)";
    $result = pg_query($conn, $query);
    return $result;
  } 