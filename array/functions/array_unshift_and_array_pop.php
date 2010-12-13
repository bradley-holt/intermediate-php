<?php
$post = array(
  // …
  'categories'  => array('BTV')
);
array_unshift($post['categories'], 'PHP');
print_r($post['categories']);
/*
Array
(
    [0] => PHP
    [1] => BTV
)
 */
echo array_pop($post['categories']);
// BTV