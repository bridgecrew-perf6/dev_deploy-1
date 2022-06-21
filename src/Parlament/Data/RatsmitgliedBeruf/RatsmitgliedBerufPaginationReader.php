<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
/**
* @return RatsmitgliedBerufRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new RatsmitgliedBerufRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}