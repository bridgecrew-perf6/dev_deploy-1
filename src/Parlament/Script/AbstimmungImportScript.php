<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Parlament\Import\Abstimmung\AbstimmungImport;


class AbstimmungImportScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'parlament-abstimmung';
    }

    public function run()
    {

        $import = new AbstimmungImport();
        $import->sessionId = 5113;
        $import->importDetail = true;
        $import->importGeschaeft = true;
        $import->importData();

    }
}