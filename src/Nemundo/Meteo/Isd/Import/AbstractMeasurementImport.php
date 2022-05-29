<?phpnamespace Nemundo\Meteo\Isd\Import;use Nemundo\Content\App\TimeSeries\Content\TimeSeries\TimeSeriesContentType;use Nemundo\Core\Archive\GzExtractor;use Nemundo\Core\Base\AbstractImport;use Nemundo\Core\Debug\Debug;use Nemundo\Core\File\UniqueFilename;use Nemundo\Core\Log\LogMessage;use Nemundo\Core\Path\Path;use Nemundo\Core\TextFile\Reader\TextFileReader;use Nemundo\Core\Type\DateTime\DateTime;use Nemundo\Core\File\File;use Nemundo\Core\Type\Text\Text;use Nemundo\Core\WebRequest\WebRequest;use Nemundo\Db\Sql\Field\Aggregate\SumField;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Meteo\Isd\Data\Measurement\MeasurementBulk;use Nemundo\Meteo\Isd\Data\Measurement\MeasurementReader;use Nemundo\Meteo\Isd\Data\MeasurementDay\MeasurementDay;use Nemundo\Meteo\Isd\Data\Station\StationReader;use Nemundo\Meteo\Isd\Data\Station\StationRow;use Nemundo\Meteo\Isd\Path\IsdPath;use Nemundo\Project\Path\TmpPath;abstract class AbstractMeasurementImport extends AbstractImport{    /**     * @var int     */    public $stationId;    /**     * @var int     */    public $year;}