<?php
include_once "include/util.php";
include_once "models/post.php";

function __empty_post() {
  return array(
    'id' => '',
    'title' => '',
    'content' => '',
    'datestamp' => '',
    'tags' => ''
  );
}

function get_list() {
  $posts = findAllPosts();
  renderTemplate(
    "views/index.php",
    array(
      'title' => 'My Blog Engine',
      'posts' => $posts,
    )
  );
}

function get_add() {
  $post = __empty_post();
  renderTemplate(
    "views/post_add.php",
    array(
      'title' => 'Add a blog post',
      'post' => $post
    )
  );
}
?>