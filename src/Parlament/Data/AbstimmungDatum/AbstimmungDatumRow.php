<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatumRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AbstimmungDatumModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $datum;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$value = $this->getModelValue($model->datum);
if ($value !== "0000-00-00") {
$this->datum = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->datum));
}
}
}