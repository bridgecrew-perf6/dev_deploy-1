<?phpnamespace Nemundo\Meteo\AviationWeather\Data\MetarStation;use Nemundo\Model\Id\AbstractModelIdValue;class MetarStationId extends AbstractModelIdValue {/*** @var MetarStationModel*/public $model;public function __construct() {parent::__construct();$this->model = new MetarStationModel();}}