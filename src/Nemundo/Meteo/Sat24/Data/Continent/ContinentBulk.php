<?phpnamespace Nemundo\Meteo\Sat24\Data\Continent;class ContinentBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {/*** @var ContinentModel*/protected $model;/*** @var string*/public $continent;/*** @var string*/public $url;public function __construct() {parent::__construct();$this->model = new ContinentModel();}public function save() {$this->typeValueList->setModelValue($this->model->continent, $this->continent);$this->typeValueList->setModelValue($this->model->url, $this->url);$id = parent::save();return $id;}}