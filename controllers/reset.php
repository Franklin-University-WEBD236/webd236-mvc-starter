<?php
  include_once "include/util.php";

  function post_index() {
    $dbFilename = CONFIG['database'];
    $output = `sqlite3 {$dbFilename}.db3 < {$dbFilename}.sql 2>&1`;
    if ($output) {
      errorPage(500, "<pre style='color:red'>SQLite errors in {$dbFilename}.sql\n" . $output . "</pre>");
    }
    redirectRelative("index");
  }
?>