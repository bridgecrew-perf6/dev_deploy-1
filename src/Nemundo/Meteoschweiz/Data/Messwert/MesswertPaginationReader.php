<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var MesswertModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
/**
* @return \Nemundo\Meteoschweiz\Row\MesswertCustomRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new \Nemundo\Meteoschweiz\Row\MesswertCustomRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}