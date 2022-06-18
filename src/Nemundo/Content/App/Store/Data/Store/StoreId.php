<?php
namespace Nemundo\Content\App\Store\Data\Store;
use Nemundo\Model\Id\AbstractModelIdValue;
class StoreId extends AbstractModelIdValue {
/**
* @var StoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
}