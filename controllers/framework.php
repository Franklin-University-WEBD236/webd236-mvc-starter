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
  $contents = file_get_contents("controllers/{$controller}.php");
  $template = "<?php\nfunction {$function}() {\n\n}";
  $template = preg_replace("/<\?php/", $template, $contents);
  file_put_contents("controllers/{$controller}.php", $template);
  `refresh`;
}

function sanitize($str) {
  // sanitize controller and function names
  return preg_replace("/([^\w\d_])/", '', $str);
}