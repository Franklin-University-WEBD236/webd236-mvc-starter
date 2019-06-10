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
  $errors = array();
  if (!$post['content']) {
    $errors['content'] = "Content may not be empty.";
  }

  if (!$post['title']) {
    $errors['title'] = "Title may not be empty.";
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
      'errors' => '',
      'post' => $post
    )
  );
}

function post_add() {
  $post = __empty_post();
  $post['title'] = safeParam($_REQUEST, 'title', false);
  $post['content'] = safeParam($_REQUEST, 'content', false);
  $post['tags'] = safeParam($_REQUEST, 'tags', false);
  $errors = __check_post($post);
  if ($errors) {
    renderTemplate(
      "views/post_addedit.php",
      array(
        'title' => 'Add a blog post',
        'operation' => 'add',
        'errors' => $errors,
        'post' => $post
      )
    );
  }
}

?>