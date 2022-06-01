<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var LastUpdateModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $lastUpdate;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->lastUpdate = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->lastUpdate));
}
}