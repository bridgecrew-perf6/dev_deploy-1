<?phpnamespace Nemundo\Meteo\Eumetsat\Data\EumetsatLatest;class EumetsatLatestBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {/*** @var EumetsatLatestModel*/protected $model;/*** @var string*/public $regionId;/*** @var string*/public $imageTypeId;public function __construct() {parent::__construct();$this->model = new EumetsatLatestModel();}public function save() {$this->typeValueList->setModelValue($this->model->regionId, $this->regionId);$this->typeValueList->setModelValue($this->model->imageTypeId, $this->imageTypeId);$id = parent::save();return $id;}}