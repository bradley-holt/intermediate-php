<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
$post['categories'][1] = 'Burlington';
print_r($post['categories']);
/*
Array
(
    [0] => PHP
    [1] => Burlington
)
 */