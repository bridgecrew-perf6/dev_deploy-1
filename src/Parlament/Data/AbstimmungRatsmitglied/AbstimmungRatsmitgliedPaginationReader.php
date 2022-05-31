<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungRatsmitgliedModel();
}
/**
* @return AbstimmungRatsmitgliedRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AbstimmungRatsmitgliedRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}