<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var DateContentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
}
/**
* @return DateContentRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new DateContentRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}