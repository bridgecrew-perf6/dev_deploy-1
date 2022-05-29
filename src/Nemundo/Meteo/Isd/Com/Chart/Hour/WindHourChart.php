<?phpnamespace Nemundo\Meteo\Isd\Com\Chart\Hour;use Nemundo\Com\Chart\Data\LineChartData;use Nemundo\Meteo\Isd\Data\Measurement\MeasurementRow;use Nemundo\Meteo\Isd\Data\Station\StationRow;class WindHourChart extends AbstractStationHourChart{    /**     * @var LineChartData[]     */    private $line = [];    protected function loadContainer()    {        parent::loadContainer();        $this->chartTitle = 'Wind';    }    protected function onStationRow(StationRow $stationRow)    {        $this->line[$stationRow->id] = new LineChartData($this);        $this->line[$stationRow->id]->legend = $stationRow->station;    }    protected function onMeasurementRow(MeasurementRow $measurementRow)    {        $value = null;        if ($measurementRow->windValid) {            $value = $measurementRow->wind;        }        $this->line[$measurementRow->stationId]->addValue($value);    }}