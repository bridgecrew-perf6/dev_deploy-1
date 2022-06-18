<?phpnamespace Nemundo\Meteoschweiz\Application;use Nemundo\App\Application\Type\AbstractApplication;use Nemundo\Meteoschweiz\Data\MeteoschweizModelCollection;use Nemundo\Meteoschweiz\Install\MeteoschweizInstall;use Nemundo\Meteoschweiz\Install\MeteoschweizUninstall;use Nemundo\Meteoschweiz\MeteoschweizProject;use Nemundo\Meteoschweiz\Site\MeteoschweizSite;use Nemundo\Package\Echarts\Package\EchartsPackage;class MeteoschweizApplication extends AbstractApplication{    protected function loadApplication()    {        $this->project = new MeteoschweizProject();        $this->application = 'Meteoschweiz';        $this->applicationId = 'b8030c03-5478-4700-b843-219230e1af65';        $this->modelCollectionClass = MeteoschweizModelCollection::class;        $this->installClass = MeteoschweizInstall::class;        $this->uninstallClass = MeteoschweizUninstall::class;        $this->appSiteClass = MeteoschweizSite::class;        $this->addPackage(new EchartsPackage());    }}