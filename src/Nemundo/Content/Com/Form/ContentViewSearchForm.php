<?phpnamespace Nemundo\Content\Com\Form;use Nemundo\Com\FormBuilder\SearchForm;use Nemundo\Content\Com\Input\ContentHiddenInput;use Nemundo\Content\Com\ListBox\ViewListBox;use Nemundo\Content\Type\AbstractContentType;class ContentViewSearchForm extends SearchForm{    /**     * @var AbstractContentType     */    public $contentType;    public function getContent()    {        $viewListBox = new ViewListBox($this);        $viewListBox->contentType = $this->contentType;        $viewListBox->submitOnChange = true;        $viewListBox->searchMode = true;        new ContentHiddenInput($this);        /*        if ($viewListBox->hasValue()) {            $viewRow = (new ContentViewReader())->getRowById($viewListBox->getValue());            $class = $viewRow->viewClass;            /** @var AbstractContentView $view */            /*     $view = new $class($this);                 $view->contentType = $this->contentType;             } else {                 $this->contentType->getDefaultView($this);             }*/            return parent::getContent(); // TODO: Change the autogenerated stub    }}