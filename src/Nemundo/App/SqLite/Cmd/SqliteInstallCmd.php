<?php


namespace Nemundo\App\SqLite\Cmd;


use Nemundo\App\Linux\Cmd\AbstractCmd;

class SqliteInstallCmd extends AbstractCmd
{

    public function getCmd()
    {

        $this->addCommandLine('apt-get install php-sqlite3');
        return parent::getCmd();

    }

}