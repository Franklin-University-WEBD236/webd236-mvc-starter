<?php
  include_once "include/util.php";

  function post_index() {
    $output = `sqlite3 {CONFIG['database']}.db3 < {CONFIG['database']}.sql 2>&1`;
    if ($output) {
      die("<pre style='color:red'>SQLite errors in {$dbFileName}.sql\n" . $output . "</pre>");
    }
    redirectRelative("index");
  }
?>