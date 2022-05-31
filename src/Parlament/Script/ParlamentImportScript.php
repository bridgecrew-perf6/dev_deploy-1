<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Bfs\Gemeinde\Import\KantonImport;
use Parlament\Import\Fraktion\FraktionAktivImport;
use Parlament\Import\Fraktion\FraktionImport;
use Parlament\Import\Allgemein\LegislaturImport;
use Parlament\Import\Allgemein\RatImport;
use Parlament\Import\Allgemein\SessionImport;
use Parlament\Import\Geschaeft\GeschaeftsstatusImport;
use Parlament\Import\Geschaeft\GeschaeftstypImport;
use Parlament\Import\Geschaeft\ThemaImport;
use Parlament\Import\Kommission\KommissionImport;
use Parlament\Import\Ratsmitglied\AktivRatsmitgliedImport;
use Parlament\Import\Ratsmitglied\RatsmitgliedImport;


class ParlamentImportScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'parlament-import';
        $this->description='Basis Daten Import des Parlament';
    }

    public function run()
    {

        (new KantonImport())->importData();

        (new RatImport())->importData();
        (new LegislaturImport())->importData();
        (new SessionImport())->importData();
        (new GeschaeftstypImport())->importData();
        (new GeschaeftsstatusImport())->importData();
        (new ThemaImport())->importData();
        (new FraktionImport())->importData();


        $import= new KommissionImport();
        $import->importDetail=true;
        $import->importData();


        (new AktivRatsmitgliedImport())->importData();

        (new FraktionAktivImport())->importData();


    }
}