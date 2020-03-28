<?php
  include_once "include/util.php";

  function post_index() {
    $dbFileName = "database";
    $output = `sqlite3 {$dbFileName}.db3 < {$dbFileName}.sql 2>&1`;
    if ($output) {
      die("<pre style='color:red'>SQLite errors in {$database.sql\n" . $output . "</pre>");
    }
    redirectRelative("index");
  }
?>