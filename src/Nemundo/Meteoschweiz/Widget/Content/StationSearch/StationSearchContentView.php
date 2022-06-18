<?phpnamespace Nemundo\Meteoschweiz\Widget\Content\StationSearch;use Nemundo\Com\FormBuilder\SearchForm;use Nemundo\Content\Com\Widget\ContentWidget;use Nemundo\Content\View\AbstractContentView;use Nemundo\Core\Http\Request\Get\GetRequestReader;use Nemundo\Html\Form\Input\HiddenInput;use Nemundo\Meteoschweiz\Com\ListBox\StationListBox;use Nemundo\Meteoschweiz\Content\Station\View\ChartContentView;use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;class StationSearchContentView extends AbstractContentView{    /**     * @var StationSearchContentType     */    public $contentType;    protected function loadView()    {        $this->viewName = 'default';        $this->viewId = '8ec8adc2-c67c-4eee-8386-51396f6737f9';        $this->defaultView = true;    }    public function getContent()    {        $form = new SearchForm($this);        $formRow = new BootstrapRow($form);        $station = new StationListBox($formRow);        $station->submitOnChange = true;        $station->searchMode = true;        $station->column = true;        $station->columnSize = 2;        foreach ((new GetRequestReader())->getData() as $item) {            if ($item->name !== $station->name) {                $hidden = new HiddenInput($formRow);                $hidden->name = $item->name;                $hidden->value = $item->value;            }        }        if ($station->hasValue()) {            $widget = new ContentWidget($this);            $widget->contentType = $station->getStationContentType();            $widget->viewId = (new ChartContentView())->viewId;        }        return parent::getContent();    }}