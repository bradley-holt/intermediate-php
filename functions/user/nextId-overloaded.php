<?php
function nextId($arg1)
{
  switch (true) {
    case is_array($arg1):
      return max(array_keys($arg1)) + 1;
    case is_int($arg1):
      return $arg1 + 1;
  }
  throw new InvalidArgumentException();
}
$posts = array(
  1233  => array(/* … */),
  1234  => array(/* … */),
);
echo nextId($posts); // 1235
echo nextId(1234); // 1235