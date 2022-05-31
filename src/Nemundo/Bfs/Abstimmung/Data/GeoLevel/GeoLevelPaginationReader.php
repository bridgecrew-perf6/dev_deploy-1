<?php
namespace Nemundo\Bfs\Abstimmung\Data\GeoLevel;
class GeoLevelPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeoLevelModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeoLevelModel();
}
/**
* @return GeoLevelRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeoLevelRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}