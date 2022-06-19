<?phpnamespace Nemundo\Roundshot\App\Container\Data\RoundshotContainerItem;class RoundshotContainerItemRow extends \Nemundo\Model\Row\AbstractModelDataRow {/*** @var \Nemundo\Model\Row\AbstractModelDataRow*/private $row;/*** @var RoundshotContainerItemModel*/public $model;/*** @var string*/public $id;/*** @var int*/public $containerId;/*** @var \Nemundo\Roundshot\App\Container\Data\RoundshotContainer\RoundshotContainerRow*/public $container;/*** @var int*/public $itemId;/*** @var \Nemundo\Roundshot\Data\Roundshot\RoundshotRow*/public $item;public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {parent::__construct($row->getData());$this->row = $row;$this->id = $this->getModelValue($model->id);$this->containerId = intval($this->getModelValue($model->containerId));if ($model->container !== null) {$this->loadNemundoRoundshotAppContainerDataRoundshotContainerRoundshotContainercontainerRow($model->container);}$this->itemId = intval($this->getModelValue($model->itemId));if ($model->item !== null) {$this->loadNemundoRoundshotDataRoundshotRoundshotitemRow($model->item);}}private function loadNemundoRoundshotAppContainerDataRoundshotContainerRoundshotContainercontainerRow($model) {$this->container = new \Nemundo\Roundshot\App\Container\Data\RoundshotContainer\RoundshotContainerRow($this->row, $model);}private function loadNemundoRoundshotDataRoundshotRoundshotitemRow($model) {$this->item = new \Nemundo\Roundshot\Data\Roundshot\RoundshotRow($this->row, $model);}}