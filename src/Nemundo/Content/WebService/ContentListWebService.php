<?phpnamespace Nemundo\Content\WebService;use Nemundo\App\WebService\Request\AbstractWebService;use Nemundo\Content\Parameter\ContentTypeParameter;use Nemundo\Content\Site\Json\ContentListJsonSite;use Nemundo\Content\Site\Json\ContentViewJsonSite;class ContentListWebService extends AbstractWebService{    protected function loadWebService()    {        $this->webService = 'Content List';        $this->webServiceId = '004ca1f1-34bb-49be-8862-ee87a0975492';        $this->site = ContentListJsonSite::$site;        $this->addParameter(new ContentTypeParameter());    }}