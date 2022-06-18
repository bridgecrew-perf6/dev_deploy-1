<?php
namespace Nemundo\Content\App\Store\Data\LargeTextStore;
use Nemundo\Model\Data\AbstractModelUpdate;
class LargeTextStoreUpdate extends AbstractModelUpdate {
/**
* @var LargeTextStoreModel
*/
public $model;

/**
* @var string
*/
public $largeText;

public function __construct() {
parent::__construct();
$this->model = new LargeTextStoreModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->largeText, $this->largeText);
parent::update();
}
}