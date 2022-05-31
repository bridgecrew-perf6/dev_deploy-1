<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
/**
* @return KommissionRatsmitgliedRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new KommissionRatsmitgliedRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}