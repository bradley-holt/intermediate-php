<?php
$functions = get_defined_functions();
echo count($functions['internal']);
// 1857