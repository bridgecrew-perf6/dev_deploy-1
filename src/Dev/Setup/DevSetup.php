<?php

namespace Dev\Setup;

use Dev\App\MyVote\Application\MyVoteApplication;
use Dev\Script\TestScript;
use Nemundo\App\Application\Reset\ApplicationReset;
use Nemundo\App\FileLog\Application\FileLogApplication;
use Nemundo\App\Script\Reset\ScriptReset;
use Nemundo\App\Script\Setup\ScriptSetup;
use Nemundo\App\WebService\Reset\WebServiceReset;
use Nemundo\Bfs\Abstimmung\Application\AbstimmungApplication;
use Nemundo\Content\App\Video\Application\VideoApplication;
use Nemundo\Content\Reset\ContentReset;
use Nemundo\Dev\Script\AdminBuilderScript;
use Nemundo\Meteo\Emagramm\Application\EmagrammApplication;
use Nemundo\Meteo\Isd\Application\IsdApplication;
use Nemundo\Model\Script\ModelCleanScript;
use Nemundo\Project\Install\ProjectInstall;
use Nemundo\Project\Reset\ProjectReset;
use Nemundo\Project\Setup\AbstractSetup;
use Parlament\Application\ParlamentApplication;
use Parlament\Scheduler\AbstimmungTodayScheduler;

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


        (new FileLogApplication())->installApp();

        (new ParlamentApplication())->installApp();
        (new AbstimmungTodayScheduler())->setActive();

        (new MyVoteApplication())->installApp();


        //(new AbstimmungApplication())->installApp();


        //(new EmagrammApplication())->installApp();






        /*(new IsdApplication())->installApp();
        (new VideoApplication())->installApp();*/


        $reset->remove();

    }
}