<?phpnamespace Nemundo\Roundshot\Data\Roundshot;class RoundshotBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {/*** @var RoundshotModel*/protected $model;/*** @var string*/public $roundshot;/*** @var string*/public $url;/*** @var \Nemundo\Core\Type\Geo\GeoCoordinateAltitude*/public $geoCoordinate;/*** @var int*/public $roundshotNumber;/*** @var bool*/public $active;public function __construct() {parent::__construct();$this->model = new RoundshotModel();$this->geoCoordinate = new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();}public function save() {$this->typeValueList->setModelValue($this->model->roundshot, $this->roundshot);$this->typeValueList->setModelValue($this->model->url, $this->url);$property = new \Nemundo\Model\Data\Property\Geo\GeoCoordinateAltitudeDataProperty($this->model->geoCoordinate, $this->typeValueList);$property->setValue($this->geoCoordinate);$this->typeValueList->setModelValue($this->model->roundshotNumber, $this->roundshotNumber);$this->typeValueList->setModelValue($this->model->active, $this->active);$id = parent::save();return $id;}}