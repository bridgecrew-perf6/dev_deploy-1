<?phpnamespace Nemundo\Meteo\Meteocentrale\Data\Foehndiagramm;use Nemundo\Model\Data\AbstractModelUpdate;class FoehndiagrammUpdate extends AbstractModelUpdate {/*** @var FoehndiagrammModel*/public $model;/*** @var \Nemundo\Model\Data\Property\File\ImageDataProperty*/public $foehndiagramm;/*** @var string*/public $foehndiagrammHash;public function __construct() {parent::__construct();$this->model = new FoehndiagrammModel();$this->foehndiagramm = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->foehndiagramm, $this->typeValueList);}public function update() {$this->typeValueList->setModelValue($this->model->foehndiagrammHash, $this->foehndiagrammHash);parent::update();}}