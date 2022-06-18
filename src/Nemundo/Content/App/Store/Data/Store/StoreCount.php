<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var StoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
}