<?phpnamespace Nemundo\Meteo\Dwd\Data\Map;use Nemundo\Model\Id\AbstractModelIdValue;class MapId extends AbstractModelIdValue {/*** @var MapModel*/public $model;public function __construct() {parent::__construct();$this->model = new MapModel();}}