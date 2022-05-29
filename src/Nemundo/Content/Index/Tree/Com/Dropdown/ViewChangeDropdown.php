<?phpnamespace Nemundo\Content\Index\Tree\Com\Dropdown;use Nemundo\Content\Com\Base\ContentTypeRedirectTrait;use Nemundo\Content\Data\ContentView\ContentViewReader;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Parameter\ViewParameter;use Nemundo\Html\Formatting\Italic;use Nemundo\Package\Bootstrap\Dropdown\BootstrapSiteDropdown;use Nemundo\Web\Site\AbstractSite;class ViewChangeDropdown extends BootstrapSiteDropdown{    use ContentTypeRedirectTrait;    /**     * @var AbstractSite     */    //public $redirectSite;    public function getContent()    {        //$i = new Italic($this);        //$i->addCssClass('fa fa-file');        //$this->showToggle=true;        //$this->dropdownButton->addCssClass('btn-primary dropdown-toggle');        $reader = new ContentViewReader();        $reader->filter->andEqual($reader->model->contentTypeId, $this->contentType->typeId);        $reader->addOrder($reader->model->viewName);        foreach ($reader->getData() as $viewRow) {            if ($this->redirectSite !== null) {                $site = clone($this->redirectSite);                $site->title = $viewRow->viewName;                $site->addParameter(new ContentParameter());                $site->addParameter(new ViewParameter($viewRow->id));                //(new Debug())->write($site->getUrl());                //(new Debug())->write($viewRow->id);                $this->addSite($site);            }            //$dropdown->addItem($viewRow->viewName,'');            //$this->addItem($viewRow->id, $viewRow->viewName);        }        return parent::getContent(); // TODO: Change the autogenerated stub    }}