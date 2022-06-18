<?php
namespace Nemundo\Content\App\Store\Data\LargeTextStore;
class LargeTextStoreCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var LargeTextStoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LargeTextStoreModel();
}
}