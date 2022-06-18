<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var MesswertDateTimeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
}
/**
* @return MesswertDateTimeRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new MesswertDateTimeRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}