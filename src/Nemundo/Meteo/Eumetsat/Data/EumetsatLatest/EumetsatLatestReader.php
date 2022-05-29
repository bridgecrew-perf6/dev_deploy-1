<?phpnamespace Nemundo\Meteo\Eumetsat\Data\EumetsatLatest;class EumetsatLatestReader extends \Nemundo\Model\Reader\ModelDataReader {/*** @var EumetsatLatestModel*/public $model;public function __construct() {parent::__construct();$this->model = new EumetsatLatestModel();}/*** @return EumetsatLatestRow[]*/public function getData() {$list = [];foreach (parent::getData() as $dataRow) {$row = $this->getModelRow($dataRow);$list[] = $row;}return $list;}/*** @return EumetsatLatestRow*/public function getRow() {$dataRow = parent::getRow();$row = $this->getModelRow($dataRow);return $row;}/*** @return EumetsatLatestRow*/public function getRowById($id) {return parent::getRowById($id);}private function getModelRow($dataRow) {$row = new EumetsatLatestRow($dataRow, $this->model);$row->model = $this->model;return $row;}}