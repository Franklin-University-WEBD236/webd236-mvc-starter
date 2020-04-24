<?php
function get_createController($controller) {
  $controller = sanitize($controller);
  $template = "<?php\n";
  file_put_contents("controllers/{$controller}.php", $template);
  `refresh`; // force glitch to find the new file
  exit();
}

function get_createFunction($controller, $function) {
  $controller = sanitize($controller);
  $function = sanitize($function);
  $contents = file_get_contents("controllers/{$controller}.php");
  $template = "<?php\nfunction {$function}() {\n  // put your code for {$function} here\n}\n";
  $template = preg_replace("/<\?php/", $template, $contents);
  file_put_contents("controllers/{$controller}.php", $template);
  `refresh`; // force glitch to find the new file
  exit();
}

function sanitize($str) {
  // sanitize controller and function names
  return preg_replace("/([^\w\d_])/", '', $str);
}