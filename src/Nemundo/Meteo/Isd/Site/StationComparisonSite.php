<?phpnamespace Nemundo\Meteo\Isd\Site;use Nemundo\Meteo\Isd\Page\StationComparisonPage;use Nemundo\Web\Site\AbstractSite;class StationComparisonSite extends AbstractSite{    /**     * @var StationComparisonSite     */    public static $site;    protected function loadSite()    {        $this->title = 'Station Comparison';        $this->url = 'station-comparison';        StationComparisonSite::$site=$this;    }    public function loadContent()    {        (new StationComparisonPage())->render();    }}