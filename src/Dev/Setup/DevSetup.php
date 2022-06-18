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
use Nemundo\Content\App\Feed\Application\FeedApplication;
use Nemundo\Content\App\Feed\Setup\FeedSetup;
use Nemundo\Content\App\File\Application\FileApplication;
use Nemundo\Content\App\Store\Application\StoreApplication;
use Nemundo\Content\App\Text\Application\TextApplication;
use Nemundo\Content\App\Video\Application\VideoApplication;
use Nemundo\Content\Reset\ContentReset;
use Nemundo\Core\Type\Text\Text;
use Nemundo\Dev\Script\AdminBuilderScript;
use Nemundo\Meteo\Emagramm\Application\EmagrammApplication;
use Nemundo\Meteo\Isd\Application\IsdApplication;
use Nemundo\Meteoschweiz\Application\MeteoschweizApplication;
use Nemundo\Model\Script\ModelCleanScript;
use Nemundo\Project\Install\ProjectInstall;
use Nemundo\Project\Reset\ProjectReset;
use Nemundo\Project\Setup\AbstractSetup;
use Nemundo\Srf\App\Livestream\Application\SrfLivestreamApplication;
use Nemundo\Srf\Application\SrfApplication;
use Nemundo\Srf\Scheduler\SrfCrawlerScheduler;
use Nemundo\Srf\Setup\SrfCrawlerSetup;
use Parlament\Application\ParlamentApplication;
use Parlament\Scheduler\AbstimmungTodayScheduler;
use Weihnachtszeit\App\Ausstellung\Application\AusstellungApplication;

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
        (new StoreApplication())->installApp();

        (new FileApplication())->installApp();
        (new TextApplication())->installApp();
        (new VideoApplication())->installApp();*/

        (new FileLogApplication())->installApp();
        (new MeteoschweizApplication())->installApp();
        (new FeedApplication())->installApp();

        (new FeedSetup())
            ->addFeed('https://de.rt.com/feeds/news/')
            ->addFeed('https://tkp.at/feed/')
            ->addFeed('https://www.epochtimes.de/rss');





        //(new SrfLivestreamApplication())->installApp();



        /*
        (new ContentApplication())->installApp();
        (new SearchApplication())->installApp();

        //(new XcontestApplication())->installApp();

        //(new ParlamentApplication())->installApp();
        (new FileApplication())->installApp();
        (new FeedApplication())->installApp();*/


        //(new RoundshotApplication())->installApp();


        //(new FileLogApplication())->installApp();


        //(new AusstellungApplication())->installApp();


        /*(new ParlamentApplication())->installApp();
        (new AbstimmungTodayScheduler())->setActive();*/

        //(new MyVoteApplication())->installApp();


        /*
        (new SrfApplication())->installApp();

        (new SrfCrawlerSetup())
            ->addShow('49863a84-1ab7-4abb-8e69-d8e8bda6c989')
            ->addShow('ff969c14-c5a7-44ab-ab72-14d4c9e427a9')
            ->addShow('c38cc259-b5cd-4ac1-b901-e3fddd901a3d');

        (new SrfCrawlerScheduler())->setActive();*/





        //(new AbstimmungApplication())->installApp();

        //(new EmagrammApplication())->installApp();

        /*(new IsdApplication())->installApp();
        (new VideoApplication())->installApp();*/


        $reset->remove();

    }
}