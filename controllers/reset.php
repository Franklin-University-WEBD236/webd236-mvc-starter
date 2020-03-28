<?php
  include_once "include/util.php";

  function post_index() {
    ob_start();
    $output = `sqlite3 database.db3 < database.sql 2>&1`;
    ob_end_clean();
    $output = ob_get_contents();
    if ($output) {
      die(nl2br($output));
    }
    redirectRelative("index");
  }
?>