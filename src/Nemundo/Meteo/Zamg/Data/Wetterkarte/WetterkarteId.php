<?phpnamespace Nemundo\Meteo\Zamg\Data\Wetterkarte;use Nemundo\Model\Id\AbstractModelIdValue;class WetterkarteId extends AbstractModelIdValue {/*** @var WetterkarteModel*/public $model;public function __construct() {parent::__construct();$this->model = new WetterkarteModel();}}