<?phpnamespace Nemundo\Meteo\Zamg\Data\WetterkarteJob;class WetterkarteJobValue extends \Nemundo\Model\Value\AbstractModelDataValue {/*** @var WetterkarteJobModel*/public $model;public function __construct() {parent::__construct();$this->model = new WetterkarteJobModel();}}