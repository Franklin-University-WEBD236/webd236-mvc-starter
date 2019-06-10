<?php
include_once 'models/db.php';

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

?>