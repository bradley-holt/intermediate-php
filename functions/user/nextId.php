<?php
function nextId($posts)
{
  return max(array_keys($posts)) + 1;
}
$posts = array(
  1233  => array(/* … */),
  1234  => array(/* … */),
);
echo nextId($posts); // 1235