<?phpnamespace Nemundo\Roundshot\App\Timelapse\Data\Timelapse;class TimelapsePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {/*** @var TimelapseModel*/public $model;public function __construct() {parent::__construct();$this->model = new TimelapseModel();}/*** @return TimelapseRow[]*/public function getData() {$list = [];foreach (parent::getData() as $dataRow) {$row = new TimelapseRow($dataRow, $this->model);$list[] = $row;}return $list;}}