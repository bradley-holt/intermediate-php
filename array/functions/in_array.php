<?php
$post = array(
  // …
  'categories'  => array('PHP', 'BTV')
);
if (in_array('PHP', $post['categories'])) {
    echo 'PHP: Hypertext Preprocessor';
}