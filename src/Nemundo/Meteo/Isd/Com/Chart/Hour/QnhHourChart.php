<?phpnamespace Nemundo\Meteo\Isd\Com\Chart\Hour;use Nemundo\Com\Chart\Data\LineChartData;use Nemundo\Meteo\Isd\Data\Measurement\MeasurementRow;use Nemundo\Meteo\Isd\Data\Station\StationRow;class QnhHourChart extends AbstractStationHourChart{    /**     * @var LineChartData[]     */    private $line = [];    protected function loadContainer()    {        parent::loadContainer();        $this->chartTitle = 'QNH';        $this->yMinValue = 950;        $this->yMaxValue = 1050;    }    protected function onStationRow(StationRow $stationRow)    {        $this->line[$stationRow->id] = new LineChartData($this);        $this->line[$stationRow->id]->legend = $stationRow->station;    }    protected function onMeasurementRow(MeasurementRow $measurementRow)    {        $value = null;        if ($measurementRow->qnhValid) {            $value = $measurementRow->qnh;        }        $this->line[$measurementRow->stationId]->addValue($value);    }}