<?phpnamespace Nemundo\Meteo\Isd\Com\Chart\Day;use Nemundo\Com\Chart\Data\LineChartData;use Nemundo\Meteo\Isd\Data\MeasurementDay\MeasurementDayRow;use Nemundo\Meteo\Isd\Data\Station\StationRow;class WindMaxDayChart extends AbstractStationDayChart{    /**     * @var LineChartData[]     */    private $line = [];    protected function loadContainer()    {        parent::loadContainer();        $this->chartTitle = 'Wind Max (per Day)';    }    protected function onStationRow(StationRow $stationRow)    {        $this->line[$stationRow->id] = new LineChartData($this);        $this->line[$stationRow->id]->legend = $stationRow->station;    }    protected function onMeasurementRow(MeasurementDayRow $measurementDayRow)    {        $this->line[$measurementDayRow->stationId]->addValue($measurementDayRow->windMax);    }}