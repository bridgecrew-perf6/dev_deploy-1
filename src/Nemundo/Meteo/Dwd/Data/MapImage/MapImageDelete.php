<?phpnamespace Nemundo\Meteo\Dwd\Data\MapImage;class MapImageDelete extends \Nemundo\Model\Delete\AbstractModelDelete {/*** @var MapImageModel*/public $model;public function __construct() {parent::__construct();$this->model = new MapImageModel();}}