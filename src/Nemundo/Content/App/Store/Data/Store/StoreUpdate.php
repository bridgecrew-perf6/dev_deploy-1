<?php
namespace Nemundo\Content\App\Store\Data\Store;
use Nemundo\Model\Data\AbstractModelUpdate;
class StoreUpdate extends AbstractModelUpdate {
/**
* @var StoreModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->uniqueName, $this->uniqueName);
$this->typeValueList->setModelValue($this->model->storeLabel, $this->storeLabel);
parent::update();
}
}