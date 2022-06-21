<?php
namespace Parlament\Data\LastUpdate;
class LastUpdatePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var LastUpdateModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
}
/**
* @return LastUpdateRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new LastUpdateRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}