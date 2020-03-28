<?php
  include_once "include/util.php";

  function post_index() {
    $output = `sqlite3 database.db3 < database.sql 2>&1`;
    if ($output) {
      die("<pre style='color:red'>SQLite errors in database.sql\n" . $output . "</pre>");
    }
    redirectRelative("index");
  }
?>