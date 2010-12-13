<?php
$post = array(
  'id'          => 1234,
  // …
  'categories'  => array('PHP', 'BTV')
);
if (array_key_exists('categories', $post)) {
  echo implode(', ', $post['categories']);
} else {
  echo 'Uncategorized';
}