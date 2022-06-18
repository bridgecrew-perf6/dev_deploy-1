<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var StoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
}