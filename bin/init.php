<?php//require_once 'config.php';require_once __DIR__.'/../autoload.php';(new \Nemundo\Project\Config\ProjectConfigBuilderScript())->run();(new \Nemundo\Db\Provider\MySql\Database\MySqlDatabase())->createDatabase();(new \Nemundo\Project\Install\ProjectInstall())->install();