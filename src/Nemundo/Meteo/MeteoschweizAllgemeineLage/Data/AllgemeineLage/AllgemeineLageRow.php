<?phpnamespace Nemundo\Meteo\MeteoschweizAllgemeineLage\Data\AllgemeineLage;class AllgemeineLageRow extends \Nemundo\Model\Row\AbstractModelDataRow {/*** @var \Nemundo\Model\Row\AbstractModelDataRow*/private $row;/*** @var AllgemeineLageModel*/public $model;/*** @var string*/public $id;/*** @var string*/public $datumText;/*** @var string*/public $allgemeineLage;/*** @var \Nemundo\Core\Type\DateTime\DateTime*/public $datum;public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {parent::__construct($row->getData());$this->row = $row;$this->id = $this->getModelValue($model->id);$this->datumText = $this->getModelValue($model->datumText);$this->allgemeineLage = $this->getModelValue($model->allgemeineLage);$this->datum = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->datum));}}