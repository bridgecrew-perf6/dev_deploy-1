<?phpnamespace Nemundo\Content\Action;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Site\ContentEditSite;use Nemundo\Content\Type\AbstractContentType;class EditAction extends AbstractAction{    protected function loadAction()    {        //$this->typeLabel='Edit Content Action';        $this->actionId='a017fb95-47a2-44b7-a33b-1cfcf1c25f14';        $this->actionLabel='Edit Content';        //$this->viewSite=ContentEditSite::$site;        // TODO: Implement loadContentType() method.    }  /*  public function onAction()    {    }*/    public function onMenuClick(AbstractContentType $content)    {        $site=clone(ContentEditSite::$site);        $site->addParameter(new ContentParameter());        $site->redirect();    }}