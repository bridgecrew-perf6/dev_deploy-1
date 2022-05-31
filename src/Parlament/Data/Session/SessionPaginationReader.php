<?php
namespace Parlament\Data\Session;
class SessionPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var SessionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SessionModel();
}
/**
* @return SessionRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new SessionRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}