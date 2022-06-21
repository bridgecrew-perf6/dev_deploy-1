<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatReader extends \Nemundo\Model\Reader\ModelDataReader {
/**
* @var ResultatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ResultatModel();
}
/**
* @return \Nemundo\Bfs\Abstimmung\Row\ResultatCustomRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return \Nemundo\Bfs\Abstimmung\Row\ResultatCustomRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return \Nemundo\Bfs\Abstimmung\Row\ResultatCustomRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new \Nemundo\Bfs\Abstimmung\Row\ResultatCustomRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}