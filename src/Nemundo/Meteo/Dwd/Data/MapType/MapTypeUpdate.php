<?phpnamespace Nemundo\Meteo\Dwd\Data\MapType;use Nemundo\Model\Data\AbstractModelUpdate;class MapTypeUpdate extends AbstractModelUpdate {/*** @var MapTypeModel*/public $model;/*** @var string*/public $mapType;public function __construct() {parent::__construct();$this->model = new MapTypeModel();}public function update() {$this->typeValueList->setModelValue($this->model->mapType, $this->mapType);parent::update();}}