<?php
namespace Parlament\Data\Interessenbindung;
class InteressenbindungPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var InteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
/**
* @return InteressenbindungRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new InteressenbindungRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}