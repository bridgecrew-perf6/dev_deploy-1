<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var RatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
}
/**
* @return \Parlament\Row\RatsmitgliedCustomRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new \Parlament\Row\RatsmitgliedCustomRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}