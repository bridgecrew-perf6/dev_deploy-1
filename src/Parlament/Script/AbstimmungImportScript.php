<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Bfs\Gemeinde\Import\KantonImport;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Type\DateTime\Date;
use Parlament\Import\Abstimmung\AbstimmungImport;
use Parlament\Import\Geschaeft\GeschaeftImport;


class AbstimmungImportScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'parlament-abstimmung';
    }

    public function run()
    {

        $import= new AbstimmungImport();
        //$import->sessionId=5115;
        //$import->datum=(new Date())->setNow()->minusDay(1);
        $import->datum= (new Date())->setNow();

        //$import->sessionId=5114;

        //$import->page=1075;
        $import->importDetail=true;
        //$import->importGeschaeft=true;*/
        $import->importData();

    }
}