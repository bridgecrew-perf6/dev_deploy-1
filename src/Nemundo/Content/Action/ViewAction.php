<?phpnamespace Nemundo\Content\Action;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Site\ContentViewSite;use Nemundo\Content\Type\AbstractContentType;class ViewAction extends AbstractAction{    protected function loadAction()    {        //$this->typeLabel='View Content Action';        $this->actionId='fa3a997c-c0e8-4b65-ae23-53916c10bf80';        $this->actionLabel='View Content';        //$this->viewSite=ContentViewSite::$site;    }    /*public function onAction()    {    }*/    public function onMenuClick(AbstractContentType $content)    {        $site = clone(ContentViewSite::$site);        $site->addParameter(new ContentParameter());        $site->redirect();    }}