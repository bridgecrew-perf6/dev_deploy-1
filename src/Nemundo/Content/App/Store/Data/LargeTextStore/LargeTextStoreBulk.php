<?php
namespace Nemundo\Content\App\Store\Data\LargeTextStore;
class LargeTextStoreBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var LargeTextStoreModel
*/
protected $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $largeText;

public function __construct() {
parent::__construct();
$this->model = new LargeTextStoreModel();
}
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->largeText, $this->largeText);
$id = parent::save();
return $id;
}
}