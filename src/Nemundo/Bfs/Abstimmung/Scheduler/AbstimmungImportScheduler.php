<?php

namespace Nemundo\Bfs\Abstimmung\Scheduler;

use Nemundo\App\Scheduler\Job\AbstractScheduler;
use Nemundo\Bfs\Abstimmung\Application\AbstimmungApplication;
use Nemundo\Bfs\Abstimmung\Data\Resultat\ResultatDelete;
use Nemundo\Bfs\Abstimmung\Import\AbstimmungImport;
use Nemundo\Core\Debug\Debug;
use Nemundo\Db\DbConfig;
use Nemundo\Model\ModelConfig;

class AbstimmungImportScheduler extends AbstractScheduler
{
    protected function loadScheduler()
    {

        $this->consoleScript = true;
        $this->scriptName = 'abstimmung-latest';

    }

    public function run()
    {

        //DbConfig::$bulkCount = 2;

        //(new AbstimmungApplication())->reinstallApp();

        (new ResultatDelete())->delete();

        (new Debug())->write('Start');

        //$url = 'https://app-prod-static-voteinfo.s3.eu-central-1.amazonaws.com/v1/ogd/sd-t-17-02-20220515-eidgAbstimmung.json';
        //$url = 'https://www.bfs.admin.ch/bfsstatic/dam/assets/7686227/master';
        $url = 'https://app-prod-static-voteinfo.s3.eu-central-1.amazonaws.com/v1/ogd/sd-t-17-02-20220515-eidgAbstimmung.json';

        $import = new AbstimmungImport();
        $import->showProgress=true;
        $import->importAbstimmung($url);

    }
}