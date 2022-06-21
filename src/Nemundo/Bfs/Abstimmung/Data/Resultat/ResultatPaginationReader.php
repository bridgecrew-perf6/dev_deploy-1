<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
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
$row = new \Nemundo\Bfs\Abstimmung\Row\ResultatCustomRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}