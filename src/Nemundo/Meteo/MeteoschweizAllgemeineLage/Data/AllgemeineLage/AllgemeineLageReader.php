<?phpnamespace Nemundo\Meteo\MeteoschweizAllgemeineLage\Data\AllgemeineLage;class AllgemeineLageReader extends \Nemundo\Model\Reader\ModelDataReader {/*** @var AllgemeineLageModel*/public $model;public function __construct() {parent::__construct();$this->model = new AllgemeineLageModel();}/*** @return AllgemeineLageRow[]*/public function getData() {$list = [];foreach (parent::getData() as $dataRow) {$row = $this->getModelRow($dataRow);$list[] = $row;}return $list;}/*** @return AllgemeineLageRow*/public function getRow() {$dataRow = parent::getRow();$row = $this->getModelRow($dataRow);return $row;}/*** @return AllgemeineLageRow*/public function getRowById($id) {return parent::getRowById($id);}private function getModelRow($dataRow) {$row = new AllgemeineLageRow($dataRow, $this->model);$row->model = $this->model;return $row;}}