<?phpnamespace Nemundo\Meteo\Kachelmann\Data\Satellitenbilder;use Nemundo\Model\Data\AbstractModelUpdate;class SatellitenbilderUpdate extends AbstractModelUpdate {/*** @var SatellitenbilderModel*/public $model;/*** @var \Nemundo\Core\Type\DateTime\DateTime*/public $dateTime;/*** @var \Nemundo\Model\Data\Property\File\ImageDataProperty*/public $image;public function __construct() {parent::__construct();$this->model = new SatellitenbilderModel();$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime();$this->image = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->image, $this->typeValueList);}public function update() {$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);$property->setValue($this->dateTime);parent::update();}}