<?phpnamespace Nemundo\Content\Site;use Nemundo\Content\Index\Tree\Site\ContentRemoveFromTreeSite;use Nemundo\Content\Index\Tree\Site\Sortable\ContentSortableSite;use Nemundo\Content\Index\Tree\Site\ViewEditSite;use Nemundo\Content\Page\ContentPage;use Nemundo\Content\Site\Ajax\ContentTypeFormAjaxSite;use Nemundo\Content\Site\Json\ContentPostRequestSite;use Nemundo\Content\Site\Json\ContentViewJsonSite;use Nemundo\Web\Site\AbstractSite;class ContentSite extends AbstractSite{    /**     * @var ContentSite     */    public static $site;    protected function loadSite()    {        $this->title = 'Content';        $this->url = 'content';        ContentSite::$site = $this;        new ContentViewSite($this);        //new TreeContentNewSite($this);        new ContentNewSite($this);        new ContentEditSite($this);        new ContentDeleteSite($this);        new ContentActionSite($this);        //new ContentRemoveSite($this);        //new ViewEditSite($this);        new ContentViewJsonSite($this);        //new TestSite($this);        new ContentPostRequestSite($this);        new ContentTypeFormAjaxSite($this);        new ContentSortableSite($this);    }    public function loadContent()    {        (new ContentPage())->render();    }}