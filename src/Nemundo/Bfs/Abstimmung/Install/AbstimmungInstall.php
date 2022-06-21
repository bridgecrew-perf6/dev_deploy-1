<?phpnamespace Nemundo\Bfs\Abstimmung\Install;use Nemundo\App\Application\Type\Install\AbstractInstall;use Nemundo\App\Scheduler\Setup\SchedulerSetup;use Nemundo\App\Script\Setup\ScriptSetup;use Nemundo\App\WebService\Setup\ServiceRequestSetup;use Nemundo\Bfs\Abstimmung\Application\AbstimmungApplication;use Nemundo\Bfs\Abstimmung\Content\Abstimmung\AbstimmungContentType;use Nemundo\Bfs\Abstimmung\Data\AbstimmungModelCollection;use Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevel;use Nemundo\Bfs\Abstimmung\Scheduler\AbstimmungImportScheduler;use Nemundo\Bfs\Abstimmung\Script\AbstimmungImportScript;use Nemundo\Bfs\Abstimmung\Service\AbstimmungService;use Nemundo\Bfs\Abstimmung\Service\DatumService;use Nemundo\Bfs\Abstimmung\Service\JahrService;use Nemundo\Bfs\Abstimmung\Service\ResultatService;use Nemundo\Bfs\Abstimmung\Type\GeoLevel\AbstractGeoLevel;use Nemundo\Bfs\Abstimmung\Type\GeoLevel\BezirkGeoLevel;use Nemundo\Bfs\Abstimmung\Type\GeoLevel\BundGeoLevel;use Nemundo\Bfs\Abstimmung\Type\GeoLevel\GemeindeGeoLevel;use Nemundo\Bfs\Abstimmung\Type\GeoLevel\KantonGeoLevel;use Nemundo\Bfs\Gemeinde\Application\GemeindeApplication;use Nemundo\Content\Application\ContentApplication;use Nemundo\Content\Setup\ContentTypeSetup;use Nemundo\Model\Setup\ModelCollectionSetup;class AbstimmungInstall extends AbstractInstall{    public function install()    {        (new ContentApplication())->installApp();        //(new JobApplication())->installApp();        //(new TimelineApplication())->installApp();        (new GemeindeApplication())->installApp();        //(new ApplicationSetup())->addApplication(new AbstimmungApplication());        (new ModelCollectionSetup())->addCollection(new AbstimmungModelCollection());        (new ScriptSetup(new AbstimmungApplication()))            ->addScript(new AbstimmungImportScript());        (new SchedulerSetup(new AbstimmungApplication()))            ->addScheduler(new AbstimmungImportScheduler());        /*(new JobSetup(new AbstimmungApplication()))            ->addJob(new AbstimmungImportJob());*/        $this->addGeoLevel(new BundGeoLevel());        $this->addGeoLevel(new KantonGeoLevel());        $this->addGeoLevel(new BezirkGeoLevel());        $this->addGeoLevel(new GemeindeGeoLevel());        (new ContentTypeSetup(new AbstimmungApplication()))            //->addContentType(new StimmbeteiligungContentType())            ->addContentType(new AbstimmungContentType());        //->addContentType(new AbstimmungResultatWidgetContentType());        /*$this->addSortOrder(new AscendingSortOrder());        $this->addSortOrder(new DescendingSortOrder());        $this->addSortOrder(new RandomSortOrder());*/        (new ServiceRequestSetup(new AbstimmungApplication()))            ->addService(new AbstimmungService())            //->addService(new KantonService())            //->addService(new GemeindeService())            //->addService(new GeoService())            ->addService(new DatumService())            ->addService(new JahrService())            ->addService(new ResultatService());        //->addService(new ResultatComparisonService());    }    private function addGeoLevel(AbstractGeoLevel $geoLevel)    {        $data = new GeoLevel();        $data->updateOnDuplicate = true;        $data->id = $geoLevel->id;        $data->geoLevel = $geoLevel->geo;        $data->save();    }    /*  private function addSortOrder(AbstractSortOrder $sortOrder)      {          $data = new ListSortOrder();          $data->updateOnDuplicate = true;          $data->id = $sortOrder->id;          $data->sortOrder = $sortOrder->sortOrder;          $data->sql = $sortOrder->sql;          $data->save();      }*/}