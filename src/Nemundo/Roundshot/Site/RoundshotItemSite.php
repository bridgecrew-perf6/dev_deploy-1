<?phpnamespace Nemundo\Roundshot\Site;use Nemundo\Dev\App\Factory\DefaultTemplateFactory;use Nemundo\Roundshot\Content\RoundshotContentType;use Nemundo\Roundshot\Parameter\RoundshotParameter;use Nemundo\Web\Site\AbstractSite;class RoundshotItemSite extends AbstractSite{    /**     * @var RoundshotItemSite     */    public static $site;    protected function loadSite()    {        $this->url = 'item';        $this->menuActive = false;        RoundshotItemSite::$site = $this;    }    public function loadContent()    {       // (new RoundshotItemPage())->render();        $page = (new DefaultTemplateFactory())->getDefaultTemplate();        $roundshotId = (new RoundshotParameter())->getValue();        $type = new RoundshotContentType($roundshotId);        $type->getView($page);            $page->render();    }}