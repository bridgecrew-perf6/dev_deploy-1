<?phpnamespace Nemundo\Meteo\Isd\Site;use Nemundo\Meteo\Isd\Page\CountryPage;use Nemundo\Web\Site\AbstractSite;class CountrySite extends AbstractSite{    /**     * @var CountrySite     */    public static $site;    protected function loadSite()    {        $this->title = 'Country';        $this->url = 'country';       CountrySite::$site=$this;    }    public function loadContent()    {        (new CountryPage())->render();    }}