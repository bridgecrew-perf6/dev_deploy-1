<?php


namespace Nemundo\App\MySql\Cmd;


use Nemundo\App\Linux\Cmd\AbstractCmd;

class MySqlInstallCmd extends AbstractCmd
{

    public function getCmd()
    {

        $this->addCommandLine('apt install -y mariadb-server');
        return parent::getCmd();

    }

}