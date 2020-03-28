<?php
  include_once "include/util.php";

  function post_index($params) {
    $output = `sqlite3 database.db3 < database.sql`;
    redirectRelative("index");
  }
?>