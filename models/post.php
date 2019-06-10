<?php
include_once 'models/db.php';

function findPostById($id) {
  global $db;
  $st = $db -> prepare('SELECT * FROM blog WHERE id = :id');
  $st -> execute(array(':id' => $id));
  return $st -> fetch(PDO::FETCH_ASSOC);
}

function findAllPosts($limit = 5) {
  global $db;
  $st = $db -> prepare('SELECT * FROM blog ORDER BY datestamp LIMIT :limit');
  print_r($db->errorInfo());
  $st -> execute(array(':limit' => $limit));
  return $st -> fetch(PDO::FETCH_ASSOC);
  
}
?>