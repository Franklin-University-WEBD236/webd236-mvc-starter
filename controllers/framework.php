<?php
function get_createController($controller) {
  
  file_put_contents("controllers/$controller", $template);
  #`refresh`;
}