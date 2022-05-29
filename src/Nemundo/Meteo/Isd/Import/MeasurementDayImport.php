<?phpnamespace Nemundo\Meteo\Isd\Import;use Nemundo\Content\App\TimeSeries\Content\TimeSeries\TimeSeriesContentType;use Nemundo\Core\Archive\GzExtractor;use Nemundo\Core\Base\AbstractImport;use Nemundo\Core\Debug\Debug;use Nemundo\Core\File\UniqueFilename;use Nemundo\Core\Log\LogMessage;use Nemundo\Core\Path\Path;use Nemundo\Core\TextFile\Reader\TextFileReader;use Nemundo\Core\Type\DateTime\DateTime;use Nemundo\Core\File\File;use Nemundo\Core\Type\Text\Text;use Nemundo\Core\WebRequest\WebRequest;use Nemundo\Db\Sql\Field\Aggregate\MaxField;use Nemundo\Db\Sql\Field\Aggregate\MinField;use Nemundo\Db\Sql\Field\Aggregate\SumField;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Meteo\Isd\Data\Measurement\MeasurementBulk;use Nemundo\Meteo\Isd\Data\Measurement\MeasurementReader;use Nemundo\Meteo\Isd\Data\MeasurementDay\MeasurementDay;use Nemundo\Meteo\Isd\Data\Station\StationReader;use Nemundo\Meteo\Isd\Data\Station\StationRow;use Nemundo\Meteo\Isd\Path\IsdPath;use Nemundo\Project\Path\TmpPath;class MeasurementDayImport extends AbstractMeasurementImport{    //public $stationId;    /**     * @var StationRow     *///    public $stationRow;    /**     * @var int     */    //public $year;    public function importData()    {        $measurementReader = new MeasurementReader();        $measurementReader->filter->andEqual($measurementReader->model->stationId, $this->stationId);        //$measurementReader->filter->andEqual($measurementReader->model->stationId, $this->stationId);        $measurementReader->addGroup($measurementReader->model->date);        $max= new MaxField($measurementReader);        $max->aggregateField=$measurementReader->model->temperature;        $min=new MinField($measurementReader);        $min->aggregateField=$measurementReader->model->temperature;        foreach ($measurementReader->getData() as $measurementRow) {            //(new Debug())->write($measurementRow->getModelValue($max));            $data = new MeasurementDay();            $data->ignoreIfExists=true;            $data->stationId = $this->stationId;            $data->date = $measurementRow->date;            $data->temperatureMin = $measurementRow->temperature;            $data->temperatureMax = $measurementRow->temperature;            $data->save();            /*            $measurementReader2 = new MeasurementReader();            $measurementReader2->filter->andEqual($measurementReader2->model->stationId, $this->stationRow->id);            $measurementReader2->filter->andEqual($measurementReader2->model->date, $measurementRow->date->getIsoDateFormat());            $measurementReader2->addOrder($measurementReader2->model->temperature, SortOrder::DESCENDING);            $measurementReader2->limit = 1;            foreach ($measurementReader2->getData() as $measurementRow2) {                $data->temperatureMax = $measurementRow2->temperature;                $data->dewPointMax = $measurementRow2->dewPoint;            }            $measurementReader2 = new MeasurementReader();            $measurementReader2->filter->andEqual($measurementReader2->model->stationId, $this->stationRow->id);            $measurementReader2->filter->andEqual($measurementReader2->model->date, $measurementRow->date->getIsoDateFormat());            $measurementReader2->addOrder($measurementReader2->model->temperature, SortOrder::ASCENDING);            $measurementReader2->limit = 1;            foreach ($measurementReader2->getData() as $measurementRow2) {                $data->temperatureMin = $measurementRow2->temperature;                $data->dewPointMin = $measurementRow2->dewPoint;            }            $measurementReader2 = new MeasurementReader();            $measurementReader2->filter->andEqual($measurementReader2->model->stationId, $this->stationRow->id);            $measurementReader2->filter->andEqual($measurementReader2->model->date, $measurementRow->date->getIsoDateFormat());            $measurementReader2->addOrder($measurementReader2->model->wind, SortOrder::DESCENDING);            $measurementReader2->limit = 1;            foreach ($measurementReader2->getData() as $measurementRow2) {                $data->windMax = $measurementRow2->wind;                $data->windDirectionMax = $measurementRow2->windDirection;            }            $measurementReader2 = new MeasurementReader();            $measurementReader2->filter->andEqual($measurementReader2->model->stationId, $this->stationRow->id);            $measurementReader2->filter->andEqual($measurementReader2->model->date, $measurementRow->date->getIsoDateFormat());            $measurementReader2->addOrder($measurementReader2->model->id, SortOrder::DESCENDING);            $measurementReader2->limit = 1;            foreach ($measurementReader2->getData() as $measurementRow2) {                $data->qnh = $measurementRow2->qnh;            }            $measurementReader2 = new MeasurementReader();            $measurementReader2->filter->andEqual($measurementReader2->model->stationId, $this->stationRow->id);            $measurementReader2->filter->andEqual($measurementReader2->model->date, $measurementRow->date->getIsoDateFormat());            $measurementReader2->addGroup($measurementReader2->model->date);            $sum=new SumField($measurementReader2);            $sum->aggregateField=$measurementReader2->model->precipitation;            foreach ($measurementReader2->getData() as $measurementRow2) {                $data->precipitation = $measurementRow2->getModelValue($sum);            }*/            //$data->temperatureMin=$measurementRow->getModelValue($min);            //$data->save();        }    }}