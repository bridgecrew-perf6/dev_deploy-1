<?phpnamespace Nemundo\Meteo\Emagramm\Widget;use Nemundo\Admin\Com\Widget\AbstractAdminWidget;use Nemundo\Admin\Com\Widget\AdminWidget;use Nemundo\Html\Block\Div;use Nemundo\Html\Formatting\Small;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Meteo\Emagramm\Com\ListBox\LocationListBox;use Nemundo\Meteo\Emagramm\Content\Emagramm\EmagrammContentType;use Nemundo\Meteo\Emagramm\Data\Emagramm\EmagrammReader;use Nemundo\Meteo\Emagramm\Data\Location\LocationId;class EmagrammPayerneTodayWidget extends AdminWidget  // AdminWidget  // AbstractParanautikWidget{/*    protected function loadWidget()    {        $this->widgetTitle = 'Emagramm Payerne';$this->widgetId='3d54cded-45d7-4197-b4c8-6367417844bd';    }*/    public function getContent()    {        $this->widgetTitle = 'Emagramm Payerne';        //$this->widgetSite = EmagrammSite::$site;       // new LocationListBox($this);        $id = new LocationId();        $id->filter->andEqual($id->model->location, 'Payerne');        $locationId = $id->getId();        $emagrammReader = new EmagrammReader();        $emagrammReader->limit = 1;        $emagrammReader->filter->andEqual($emagrammReader->model->locationId, $locationId);        //$emagrammReader->addOrder($emagrammReader->model->dateTime, SortOrder::DESCENDING);*/        $emagrammReader->addOrder($emagrammReader->model->id, SortOrder::DESCENDING);        foreach ($emagrammReader->getData() as $emagrammRow) {            $type = (new EmagrammContentType($emagrammRow->id));            $type->getDefaultView($this);        }        $div = new Div($this);        $small = new Small($div);        $small->content = 'Quelle: Meteo Schweiz';        return parent::getContent();    }}