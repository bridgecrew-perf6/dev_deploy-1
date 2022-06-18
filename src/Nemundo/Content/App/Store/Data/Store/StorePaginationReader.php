<?php
namespace Nemundo\Content\App\Store\Data\Store;
class StorePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var StoreModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StoreModel();
}
/**
* @return StoreRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new StoreRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}