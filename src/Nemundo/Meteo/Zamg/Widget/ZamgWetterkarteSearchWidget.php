<?phpnamespace Nemundo\Meteo\Zamg\Widget;use Nemundo\Admin\Com\Widget\AdminWidget;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Meteo\Zamg\Data\Wetterkarte\WetterkarteReader;use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;class ZamgWetterkarteSearchWidget extends AdminWidget{    public function getContent()    {        $this->widgetTitle = 'Bodendruck (Latest)';        $reader = new WetterkarteReader();        $reader->addOrder($reader->model->dateTime, SortOrder::DESCENDING);        $reader->limit = 1;        foreach ($reader->getData() as $wetterkarteRow) {            $img = new BootstrapResponsiveImage($this);            $img->src = $wetterkarteRow->image->getUrl();        }        return parent::getContent();    }}