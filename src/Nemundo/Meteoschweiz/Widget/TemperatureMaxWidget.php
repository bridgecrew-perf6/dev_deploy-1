<?phpnamespace Nemundo\Meteoschweiz\Widget;use Nemundo\Admin\Com\Table\AdminBootstrapTable;use Nemundo\Admin\Com\Widget\AdminWidget;use Nemundo\Com\TableBuilder\TableRow;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Html\Paragraph\Paragraph;use Nemundo\Meteoschweiz\Com\Small\MeteoschweizSourceSmall;use Nemundo\Meteoschweiz\Data\Messwert\MesswertReader;use Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeReader;class TemperatureMaxWidget extends AdminWidget{    protected function loadWidget()    {        $this->widgetTitle = 'Max Temperatur';    }    public function getContent()    {        $dateTimeReader = new MesswertDateTimeReader();        $dateTimeReader->addOrder($dateTimeReader->model->dateTime, SortOrder::DESCENDING);        $dateTimeReader->limit = 1;        foreach ($dateTimeReader->getData() as $dateTimeRow) {            $p = new Paragraph($this);            $p->content = $dateTimeRow->dateTime->getShortDateTimeLeadingZeroFormat() . ' UTC';            $table = new AdminBootstrapTable($this);            $messwertReader = new MesswertReader();            $messwertReader->model->loadStation();            $messwertReader->filter->andEqual($messwertReader->model->dateTimeId, $dateTimeRow->id);            $messwertReader->filter->andEqual($messwertReader->model->hasTemperature, true);            $messwertReader->addOrder($messwertReader->model->temperature, SortOrder::DESCENDING);            //$messwertReader->addOrder($messwertReader->model->temperature, SortOrder::ASCENDING);            $messwertReader->limit = 10;            foreach ($messwertReader->getData() as $messwertRow) {                $row = new TableRow($table);                $row->addText($messwertRow->station->station);                $row->addText($messwertRow->station->geoCoordinate->altitude . ' m.ü.M.');                $row->addText($messwertRow->getTemperatureText());  //temperature . '° C');            }        }        new MeteoschweizSourceSmall($this);        return parent::getContent();    }}