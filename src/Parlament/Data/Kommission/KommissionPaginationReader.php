<?php
namespace Parlament\Data\Kommission;
class KommissionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var KommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
/**
* @return KommissionRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new KommissionRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}