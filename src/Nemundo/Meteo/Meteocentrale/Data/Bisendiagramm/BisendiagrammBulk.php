<?phpnamespace Nemundo\Meteo\Meteocentrale\Data\Bisendiagramm;class BisendiagrammBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {/*** @var BisendiagrammModel*/protected $model;/*** @var \Nemundo\Model\Data\Property\File\ImageDataProperty*/public $bisendiagramm;/*** @var string*/public $bisendiagrammHash;public function __construct() {parent::__construct();$this->model = new BisendiagrammModel();$this->bisendiagramm = new \Nemundo\Model\Data\Property\File\ImageDataProperty($this->model->bisendiagramm, $this->typeValueList);}public function save() {$this->typeValueList->setModelValue($this->model->bisendiagrammHash, $this->bisendiagrammHash);$id = parent::save();return $id;}}