<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStationPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var CmsMesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
/**
* @return CmsMesswertStationRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new CmsMesswertStationRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}