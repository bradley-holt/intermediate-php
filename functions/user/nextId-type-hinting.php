<?php
function nextId(array $posts)
{
  return max(array_keys($posts)) + 1;
}
$posts = array(
  1233  => array(/* … */),
  1234  => array(/* … */),
);
echo nextId($posts); // 1235
echo nextId(1234);
// Argument 1 passed to nextId() must be an array, integer given