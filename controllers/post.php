<?php
include_once "include/util.php";
include_once "models/post.php";


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
  $post['datestamp'] = time();
  addPost($post);
  redirectRelative("index");
}

function get_view($id) {
  $post = findPostById($id);
  renderTemplate(
    "views/post_view.php",
    array(
      'title' => ,
      'operation' => 'edit',
      'post' => $post
    )
  );
  
}

?>