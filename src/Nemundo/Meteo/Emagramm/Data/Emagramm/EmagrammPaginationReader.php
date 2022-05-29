<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var EmagrammModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
}
/**
* @return EmagrammRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new EmagrammRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}