<?php
namespace Parlament\Data\Geschaeftsstatus;
class GeschaeftsstatusPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var GeschaeftsstatusModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftsstatusModel();
}
/**
* @return GeschaeftsstatusRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new GeschaeftsstatusRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}