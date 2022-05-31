<?php

namespace Nemundo\Bfs\Gemeinde\Install;

use Nemundo\App\Application\Setup\ApplicationSetup;
use Nemundo\App\Application\Type\Install\AbstractInstall;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\App\WebService\Setup\ServiceRequestSetup;
use Nemundo\Bfs\Gemeinde\Application\GemeindeApplication;
use Nemundo\Bfs\Gemeinde\Data\GemeindeModelCollection;
use Nemundo\Bfs\Gemeinde\Script\GemeindeCleanScript;
use Nemundo\Bfs\Gemeinde\Script\GemeindeImportScript;
use Nemundo\Bfs\Gemeinde\Service\BezirkService;
use Nemundo\Bfs\Gemeinde\Service\GemeindeService;
use Nemundo\Bfs\Gemeinde\Service\KantonService;
use Nemundo\Model\Setup\ModelCollectionSetup;

class GemeindeInstall extends AbstractInstall
{
    public function install()
    {

        (new ApplicationSetup())
            ->addApplication(new GemeindeApplication());

        (new ModelCollectionSetup())
            ->addCollection(new GemeindeModelCollection());

        (new ScriptSetup(new GemeindeApplication()))
            ->addScript(new GemeindeImportScript())
            ->addScript(new GemeindeCleanScript())
        ;

        (new ServiceRequestSetup())
            ->addService(new GemeindeService())
            ->addService(new BezirkService())
            ->addService(new KantonService());

    }
}