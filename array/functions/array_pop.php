<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
echo array_pop($post['categories']);
// BTV
print_r($post['categories']);
/*
Array
(
    [0] => PHP
)
 */