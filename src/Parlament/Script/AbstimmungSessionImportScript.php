<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Console\ConsoleInput;
use Parlament\Import\Abstimmung\AbstimmungImport;


class AbstimmungSessionImportScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'parlament-abstimmung-session';
    }

    public function run()
    {

        $input = new ConsoleInput();
        $input->message='Session';
        $input->defaultValue= 5115;

        $import = new AbstimmungImport();
        $import->sessionId = $input->getValue();
        $import->importDetail = true;
        $import->importGeschaeft = true;
        $import->importData();

    }
}