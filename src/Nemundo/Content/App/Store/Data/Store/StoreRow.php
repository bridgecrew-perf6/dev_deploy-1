<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var StoreModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $uniqueName;

/**
* @var string
*/
public $storeLabel;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->uniqueName = $this->getModelValue($model->uniqueName);
$this->storeLabel = $this->getModelValue($model->storeLabel);
}
}