<?php
namespace Parlament\Data\Rat;
class RatPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var RatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
/**
* @return RatRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new RatRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}