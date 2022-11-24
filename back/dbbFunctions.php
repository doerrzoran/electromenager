<?php

require_once "connectToDatabase.php";
 
 function selectFromDatabase($table, $key, $data, $conn){
    $query = "SELECT * FROM $table WHERE $key = '$data'";
    $result = pg_query($conn, $query);
    $row = pg_fetch_row($result);
    return $row;
  }

 function selectMultipleFromDatabase($table, $key, $data, $conn){
    $query = "SELECT * FROM $table WHERE $key = '$data'";
    $result = pg_query($conn, $query);
    $all = pg_fetch_all($result);
    return $all;
  }

  function selectAllFromDatabase($table, $conn){
    $query = "SELECT * FROM $table";
    $result = pg_query($conn, $query);
    $all = pg_fetch_all($result);
    return $all;
  }
  

  function insertIntoDatabase($table, $key, $data, $conn){ 
    $query = "INSERT INTO $table ($key) VALUES ($data)";
    $result = pg_query($conn, $query);
    return $result;
  } 

  function deleteFromDatabase($table, $key, $data, $conn){
    $query = "DELETE * FROM $table WHERE $key = '$data'";
    $result = pg_query($conn, $query);
    return $result;
  }