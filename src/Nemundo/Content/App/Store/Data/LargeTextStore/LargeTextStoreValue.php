<?php
namespace Nemundo\Content\App\Store\Data\LargeTextStore;
class LargeTextStoreValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var LargeTextStoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LargeTextStoreModel();
}
}