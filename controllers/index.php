<?php
include_once "include/util.php";
include_once "models/post.php";
include_once "controllers/post.php";

function get_index() {
  renderTemplate(
    "views/index.php",
    array(
      'title' => 'MCV Starter',
    )
  );
}

?>