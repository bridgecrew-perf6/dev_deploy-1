<?php

namespace Dev\Setup;

use Dev\Script\TestScript;
use Nemundo\App\Application\Reset\ApplicationReset;
use Nemundo\App\Script\Reset\ScriptReset;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\App\WebService\Reset\WebServiceReset;
use Nemundo\Content\Reset\ContentReset;
use Nemundo\Dev\Script\AdminBuilderScript;
use Nemundo\Meteo\Isd\Application\IsdApplication;
use Nemundo\Model\Script\ModelCleanScript;
use Nemundo\Project\Install\ProjectInstall;
use Nemundo\Project\Reset\ProjectReset;
use Nemundo\Project\Setup\AbstractSetup;

class DevSetup extends AbstractSetup
{
    public function run()
    {
        $reset = new ProjectReset();
        $reset->addReset(new ScriptReset());
        $reset->addReset(new ApplicationReset());
        $reset->addReset(new ContentReset());
        $reset->addReset(new WebServiceReset());
        $reset->reset();

        (new ProjectInstall())->install();
        (new ScriptSetup())->addScript(new AdminBuilderScript());

        (new ScriptSetup())->addScript(new TestScript());
        (new ScriptSetup())->addScript(new ModelCleanScript());

        /*
        (new ContentApplication())->installApp();
        (new SearchApplication())->installApp();

        //(new XcontestApplication())->installApp();

        //(new ParlamentApplication())->installApp();
        (new FileApplication())->installApp();
        (new FeedApplication())->installApp();*/


        //(new RoundshotApplication())->installApp();


        //(new ParlamentApplication())->installApp();
        (new IsdApplication())->installApp();


        $reset->remove();

    }
}