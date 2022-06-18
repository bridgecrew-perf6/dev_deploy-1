<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var MesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
}
/**
* @return MesswertStationRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new MesswertStationRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}