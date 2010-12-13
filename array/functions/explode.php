<?php
$post = array(
  // …
  'categories'  =>
    explode(', ', 'PHP, BTV')
);
print_r($post['categories']);
/*
Array
(
    [0] => PHP
    [1] => BTV
)
 */