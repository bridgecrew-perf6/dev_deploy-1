<?phpnamespace Nemundo\Meteo\MeteoschweizBlog\Application;use Nemundo\App\Application\Type\AbstractApplication;use Nemundo\Meteo\MeteoschweizBlog\Install\MeteoschweizBlogInstall;use Nemundo\Meteo\MeteoschweizBlog\Install\MeteoschweizBlogUninstall;class MeteoschweizBlogApplication extends AbstractApplication{    protected function loadApplication()    {        $this->application = 'Meteoschweiz Blog';        $this->applicationId = '4d7942f0-43da-4249-8d47-2950335cea8a';        $this->installClass = MeteoschweizBlogInstall::class;        $this->uninstallClass = MeteoschweizBlogUninstall::class;    }}