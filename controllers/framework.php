<?php
function get_createController($controller) {
  $controller = sanitize($controller);
  $template = "<?php\n";
  file_put_contents("controllers/{$controller}.php", $template);
  `refresh`;
}

function get_createFunction($controller, $function) {
  $controller = sanitize($controller);
  $function = sanitize($function);
  $template = file_get_contents("controllers/{$controller}.php");
  echo $template;
}

function sanitize($str) {
  // sanitize controller and function names
  return mb_ereg_replace("([^\w\d_])", '', $str);
}