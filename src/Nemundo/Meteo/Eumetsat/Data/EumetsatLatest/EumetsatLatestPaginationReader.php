<?phpnamespace Nemundo\Meteo\Eumetsat\Data\EumetsatLatest;class EumetsatLatestPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {/*** @var EumetsatLatestModel*/public $model;public function __construct() {parent::__construct();$this->model = new EumetsatLatestModel();}/*** @return EumetsatLatestRow[]*/public function getData() {$list = [];foreach (parent::getData() as $dataRow) {$row = new EumetsatLatestRow($dataRow, $this->model);$list[] = $row;}return $list;}}