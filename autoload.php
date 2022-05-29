<?php
function autoloader($class) {
$class = str_replace(chr(92), DIRECTORY_SEPARATOR, $class);
include "src" . DIRECTORY_SEPARATOR . $class . ".php";
}
spl_autoload_register("autoloader");