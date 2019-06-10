<?php
include_once 'models/db.php';

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

function findPostById($id) {
  global $db;
  $st = $db -> prepare('SELECT * FROM post WHERE id = :id');
  $st -> execute(array(':id' => $id));
  return $st -> fetch(PDO::FETCH_ASSOC);
}

function findAllPosts($limit = 5) {
  global $db;
  $st = $db -> prepare('SELECT * FROM post ORDER BY datestamp LIMIT :limit');
  $st -> execute(array(':limit' => $limit));
  return $st -> fetchAll(PDO::FETCH_ASSOC);
}

function addPost($post) {
  global $db;
  $st = $db -> prepare("INSERT INTO post (title, content, datestamp, tags) VALUES (:title, :content, DATE('now'), :tags)");
  $st -> bindParam(':title', $post['title']);
  $st -> bindParam(':content', $post['content']);
  $st -> bindParam(':tags', $post['tags']);
  $st -> execute();
  error_log($db->lastInsertId());
  return $db->lastInsertId();
}

?>