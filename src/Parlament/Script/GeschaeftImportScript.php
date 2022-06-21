<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Parlament\Data\CrawlerLog\CrawlerLog;
use Parlament\Data\CrawlerLog\CrawlerLogReader;
use Parlament\Import\Geschaeft\GeschaeftImport;


class GeschaeftImportScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'parlament-geschaeft';
    }

    public function run()
    {

        //$startPage = (new CrawlerLogReader())->getRowById(1)->page;

        $import = new GeschaeftImport();
        $import->importDetail = true;
        //ge$import->page= $startPage;
        $import->importData();





    }
}