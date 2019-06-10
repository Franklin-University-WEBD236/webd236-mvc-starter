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

function __check_post($post) {
  $errors = '';
  if (!$post['content']) {
    $errors .= "No content specified.";
  }

  if (!$post['title']) {
    $errors .= "No title specified.";
  }

  return $errors;
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
    "views/post_addedit.php",
    array(
      'title' => 'Add a blog post',
      'operation' => 'add',
      'post' => $post
    )
  );
}

function post_add() {
  $post = __empty_post();
  $post['title'] = safeParam($_REQUEST['title'], false);
  $post['content'] = safeParam($_REQUEST['content'], false);
  $post['tags'] = safeParam($_REQUEST['tags'], false);
  
}

?>