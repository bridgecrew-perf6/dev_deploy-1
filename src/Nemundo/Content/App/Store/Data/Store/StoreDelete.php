<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StoreDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var StoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
}