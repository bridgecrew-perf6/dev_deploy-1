<?php

namespace Dev\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Debug\Debug;
use Nemundo\Roundshot\Application\RoundshotApplication;
use Parlament\Application\ParlamentApplication;


use Parlament\Import\Abstimmung\AbstimmungImport;
use Parlament\Import\Allgemein\FraktionImport;
use Parlament\Import\Allgemein\RatImport;
use Parlament\Import\Kommission\KommissionImport;

use Parlament\Import\Ratsmitglied\RatsmitgliedBaseImport;
use Parlament\Import\Ratsmitglied\RatsmitgliedImport;


class TestScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'test';
    }


    public function run()
    {

        (new Debug())->write('Test');


        //(new ParlamentApplication())->reinstallApp();
        //(new ParlamentApplication())->installApp();


        $import = new AbstimmungImport();
$import->page=128;
$import->importDetail=true;
$import->importData();



        //(new RatsmitgliedImport())->importData();



        /*(new RatImport())->importData();
        (new FraktionImport())->importData();*/

        //(new RatsmitgliedBaseImport())->importData();
        //(new KommissionImport())->importData();

    }


}