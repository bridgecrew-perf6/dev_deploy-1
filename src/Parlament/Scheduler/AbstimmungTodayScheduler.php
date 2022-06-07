<?php

namespace Parlament\Scheduler;

use Nemundo\App\Scheduler\Job\AbstractScheduler;
use Nemundo\Core\Type\DateTime\Date;
use Nemundo\Core\Type\DateTime\DateTime;
use Parlament\Data\LastUpdate\LastUpdate;
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
        /*$import->importDetail = true;
        $import->importGeschaeft = true;*/
        $import->importData();

        $data = new LastUpdate();
        $data->updateOnDuplicate = true;
        $data->id = 1;
        $data->lastUpdate = (new DateTime())->setNow();
        $data->save();

    }
}