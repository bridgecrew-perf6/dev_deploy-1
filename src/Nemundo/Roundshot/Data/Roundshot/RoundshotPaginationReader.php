<?phpnamespace Nemundo\Roundshot\Data\Roundshot;class RoundshotPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {/*** @var RoundshotModel*/public $model;public function __construct() {parent::__construct();$this->model = new RoundshotModel();}/*** @return RoundshotRow[]*/public function getData() {$list = [];foreach (parent::getData() as $dataRow) {$row = new RoundshotRow($dataRow, $this->model);$list[] = $row;}return $list;}}