<?phpnamespace Nemundo\Meteoschweiz\Content\StationDifference\View;use Nemundo\Content\View\AbstractContentView;use Nemundo\Meteoschweiz\Com\Chart\Difference\TemperatureDifferenceChart;use Nemundo\Meteoschweiz\Content\StationDifference\TemperatureDifferenceContentType;class TemperatureDifferenceContentView extends AbstractContentView{    /**     * @var TemperatureDifferenceContentType     */    public $contentType;    protected function loadView()    {        $this->viewName = 'default';        $this->viewId = '083c17bb-07a3-438d-b7cf-20c70c8e84ee';        $this->defaultView = true;    }    public function getContent()    {        $chart = new TemperatureDifferenceChart($this);        $chart->station1Id = $this->contentType->getDataRow()->station1Id;        $chart->station2Id = $this->contentType->getDataRow()->station2Id;        return parent::getContent();    }}