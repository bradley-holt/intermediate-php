<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
echo array_shift($post['categories']);
// PHP
print_r($post['categories']);
/*
Array
(
    [0] => BTV
)
 */