<?phpnamespace Nemundo\Bfs\Abstimmung\Site;use Nemundo\Package\FontAwesome\IconSite\AbstractClearSite;use Nemundo\Web\Site\AbstractSite;class SearchClearSite extends AbstractClearSite{    /**     * @var SearchClearSite     */    public static $site;    protected function loadSite()    {        $this->title = 'SearchClear';        $this->url = 'search-clear';        SearchClearSite::$site=$this;    }    public function loadContent()    {        AbstimmungSite::$site->redirect();    }}