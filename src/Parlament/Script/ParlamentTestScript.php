<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Type\DateTime\Date;
use Parlament\Application\ParlamentApplication;
use Parlament\Data\Abstimmung\AbstimmungDelete;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedDelete;
use Parlament\Data\Geschaeft\GeschaeftDelete;
use Parlament\Import\Abstimmung\AbstimmungImport;
use Parlament\Import\Geschaeft\ThemaImport;


class ParlamentTestScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'parlament-test';
    }

    public function run()
    {



        /*
        (new AbstimmungDelete())->delete();
        (new AbstimmungRatsmitgliedDelete())->delete();
        (new GeschaeftDelete())->delete();


        $import = new AbstimmungImport();
        $import->datum = (new Date())->setNow()->minusDay(1);
        $import->importDetail = true;
        $import->importGeschaeft=true;
        $import->importData();*/


        (new ParlamentApplication())->installApp();

        (new ThemaImport())->importData();

        (new AbstimmungDelete())->delete();
        (new AbstimmungRatsmitgliedDelete())->delete();


        $import = new AbstimmungImport();
        $import->sessionId = 5114;
        $import->importDetail = true;
        $import->importGeschaeft = true;
        $import->importData();


    }
}