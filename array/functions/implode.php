<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
echo implode(', ', $post['categories']);
// PHP, BTV