<?php

namespace Parlament\Scheduler;

use Nemundo\App\Scheduler\Job\AbstractScheduler;
use Nemundo\Core\Type\DateTime\Date;
use Parlament\Import\Abstimmung\AbstimmungImport;

class AbstimmungTodayScheduler extends AbstractScheduler
{
    protected function loadScheduler()
    {

        //$this->active = true;
        $this->minute = 30;

        $this->scriptName = 'parlament-abstimmung-today';
        $this->consoleScript = true;

    }

    public function run()
    {

        $import = new AbstimmungImport();
        $import->datum = (new Date())->setNow();
        $import->importDetail = true;
        $import->importGeschaeft=true;
        $import->importData();

    }
}