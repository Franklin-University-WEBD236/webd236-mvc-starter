<?php
global $db;
try {
  $fileName = CONFIG['databaseFile'] . ".db3";
  $db = new PDO('sqlite:' . $filename);
  if (!$db) {
    die("<pre>" . print_r($db->errorInfo(), 1) . "</pre>");
  }
} catch (PDOException $e) {
    die("Could not open database. " . $e->getMessage() . $e->getTraceAsString());
}

function adHocQuery($q) {
    global $db;
    $st = $db -> prepare($q);
    $st -> execute();
    return $st -> fetchAll(PDO::FETCH_ASSOC);
}
?>
