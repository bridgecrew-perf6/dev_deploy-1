<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var StoreModel
*/
protected $model;

/**
* @var string
*/
public $uniqueName;

/**
* @var string
*/
public $storeLabel;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->uniqueName, $this->uniqueName);
$this->typeValueList->setModelValue($this->model->storeLabel, $this->storeLabel);
$id = parent::save();
return $id;
}
}