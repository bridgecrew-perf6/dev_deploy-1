<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Core\Type\DateTime\Date;
use Parlament\Application\ParlamentApplication;
use Parlament\Data\Abstimmung\AbstimmungDelete;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedDelete;
use Parlament\Data\Geschaeft\GeschaeftDelete;
use Parlament\Import\Abstimmung\AbstimmungImport;
use Parlament\Import\Allgemein\SessionImport;
use Parlament\Import\Geschaeft\ThemaImport;
use Parlament\Import\Ratsmitglied\AktivRatsmitgliedImport;


class ParlamentTestScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'parlament-test';
    }

    public function run()
    {

        (new ParlamentApplication())->installApp();

        (new AktivRatsmitgliedImport())->importData();


    }
}