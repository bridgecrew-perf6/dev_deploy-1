<?phpnamespace Nemundo\Meteo\Dwd\Data\Map;class Map extends \Nemundo\Model\Data\AbstractModelData {/*** @var MapModel*/protected $model;/*** @var string*/public $map;/*** @var string*/public $mapUrl;public function __construct() {parent::__construct();$this->model = new MapModel();}public function save() {$this->typeValueList->setModelValue($this->model->map, $this->map);$this->typeValueList->setModelValue($this->model->mapUrl, $this->mapUrl);$id = parent::save();return $id;}}