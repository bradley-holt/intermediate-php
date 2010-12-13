<?php
$name = 'Marcus Börger';
if (function_exists('mb_strtolower')) {
  echo mb_strtolower($name, 'UTF-8');
  // marcus börger
} else {
  echo strtolower($name);
  // marcus b?rger
}