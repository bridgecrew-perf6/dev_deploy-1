<?phpnamespace Nemundo\Srf\Install;use Nemundo\App\Application\Type\Install\AbstractUninstall;use Nemundo\App\Scheduler\Setup\SchedulerSetup;use Nemundo\App\Script\Setup\ScriptSetup;use Nemundo\Model\Setup\ModelCollectionSetup;use Nemundo\Srf\Data\SrfModelCollection;use Nemundo\Srf\Scheduler\SrfCrawlerScheduler;use Nemundo\Srf\Script\SrfCleanScript;class SrfUninstall extends AbstractUninstall{    public function uninstall()    {        (new ModelCollectionSetup())            ->removeCollection(new SrfModelCollection());        $setup = new ScriptSetup();        //$setup->removeScript(new SrfImportScript());        $setup->removeScript(new SrfCleanScript());        $setup = new SchedulerSetup();        $setup->removeScheduler(new SrfCrawlerScheduler());        /*        $setup=new \Nemundo\Process\Content\Setup\ContentTypeSetup();        $setup->removeContentType(new SrfLivestreamContentType());*/        // remove search    }}