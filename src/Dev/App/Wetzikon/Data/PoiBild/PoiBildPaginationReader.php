<?php
namespace Dev\App\Wetzikon\Data\PoiBild;
class PoiBildPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var PoiBildModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new PoiBildModel();
}
/**
* @return PoiBildRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new PoiBildRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}