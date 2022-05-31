<?php
require_once "vendor/autoload.php";
require_once "autoload.php";
\Nemundo\Project\ProjectConfig::$projectPath = __DIR__ . DIRECTORY_SEPARATOR;
(new \Nemundo\Project\Loader\MySqlProjectLoader())->loadProject();
\Nemundo\Web\WebConfig::$webPath = \Nemundo\Project\ProjectConfig::$projectPath . "web" . DIRECTORY_SEPARATOR;