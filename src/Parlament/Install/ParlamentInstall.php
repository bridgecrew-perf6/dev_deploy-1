<?php

namespace Parlament\Install;

use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\Scheduler\Setup\SchedulerSetup;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\App\WebService\Setup\ServiceRequestSetup;
use Nemundo\Bfs\Gemeinde\Application\GemeindeApplication;
use Nemundo\Hosting\Setup\ServiceSetup;
use Nemundo\Model\Setup\ModelCollectionSetup;
use Parlament\Application\ParlamentApplication;
use Parlament\Data\CrawlerLog\CrawlerLog;
use Parlament\Data\Entscheidung\Entscheidung;
use Parlament\Data\Geschlecht\Geschlecht;
use Parlament\Data\ParlamentModelCollection;
use Parlament\Data\Sprache\Sprache;
use Parlament\Scheduler\AbstimmungTodayScheduler;
use Parlament\Script\AbstimmungImportScript;
use Parlament\Script\AbstimmungSessionImportScript;
use Parlament\Script\GeschaeftImportScript;
use Parlament\Script\ParlamentCleanScript;
use Parlament\Script\ParlamentImportScript;
use Parlament\Script\ParlamentTestScript;
use Parlament\Service\AbstimmungService;
use Parlament\Service\FraktionService;
use Parlament\Service\GeschaeftService;

class ParlamentInstall extends AbstractInstall
{
    public function install()
    {

        (new GemeindeApplication())
            ->installApp();

        (new ModelCollectionSetup())
            ->addCollection(new ParlamentModelCollection());

        (new ScriptSetup(new ParlamentApplication()))
            ->addScript(new ParlamentImportScript())
            ->addScript(new AbstimmungImportScript())
            ->addScript(new AbstimmungSessionImportScript())
            ->addScript(new GeschaeftImportScript())
            ->addScript(new ParlamentCleanScript())
            ->addScript(new ParlamentTestScript());

        (new SchedulerSetup(new ParlamentApplication()))
            ->addScheduler(new AbstimmungTodayScheduler());

        (new ServiceRequestSetup(new ParlamentApplication()))
            ->addService(new AbstimmungService())
            ->addService(new GeschaeftService())
            ->addService(new FraktionService());


        $this->addEntscheidung(1, 'Ja');
        $this->addEntscheidung(2, 'Nein');
        $this->addEntscheidung(3, 'Enthaltung');
        $this->addEntscheidung(4, 'Entschuldigt');
        $this->addEntscheidung(5, 'Abwesend');
        $this->addEntscheidung(6, 'Präsident');

        $this->addSprache('de', 'Deutsch');
        $this->addSprache('fr', 'French');
        $this->addSprache('it', 'Italy');

        $this->addGeschlecht(1, 'männlich');
        $this->addGeschlecht(2, 'weiblich');

        $this->addCrawlerLog(1,'Geschäft');
        $this->addCrawlerLog(2,'Abstimmung');
        $this->addCrawlerLog(3,'Ratsmitglied');

    }


    private function addEntscheidung($id, $entscheidung)
    {

        $data = new Entscheidung();
        $data->updateOnDuplicate = true;
        $data->id = $id;
        $data->entscheidung = $entscheidung;
        $data->save();

    }


    private function addSprache($code, $sprache)
    {

        $data = new Sprache();
        $data->updateOnDuplicate = true;
        $data->code = $code;
        $data->sprache = $sprache;
        $data->save();

    }


    private function addGeschlecht($id, $geschlecht)
    {

        $data = new Geschlecht();
        $data->updateOnDuplicate = true;
        $data->id = $id;
        $data->geschlecht = $geschlecht;
        $data->save();

    }


    private function addCrawlerLog($id,$crawler) {

        $data=new CrawlerLog();
        $data->ignoreIfExists=true;
        $data->id=$id;
        $data->crawler=$crawler;
        $data->page=1;
        $data->finished=false;
        $data->save();

    }


}