<?php
function get_hello() {
  renderTemplate(
    "views/foo.php",
    array(
      'title' => 'About Us'
    )
  );
}

