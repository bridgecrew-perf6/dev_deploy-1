<?php
namespace Parlament\Data\Fraktion;
class FraktionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var FraktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
/**
* @return \Parlament\Row\FraktionCustomRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new \Parlament\Row\FraktionCustomRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}