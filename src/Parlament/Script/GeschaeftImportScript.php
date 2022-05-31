<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Bfs\Gemeinde\Import\KantonImport;
use Nemundo\Core\Debug\Debug;
use Parlament\Import\Geschaeft\GeschaeftImport;


class GeschaeftImportScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'parlament-geschaeft-import';
        //$this->scriptName = 'parlament-geschaeft';
    }

    public function run()
    {

        $import= new GeschaeftImport();
        $import->page=1075;
        $import->importDetail=true;
        $import->importData();

    }
}