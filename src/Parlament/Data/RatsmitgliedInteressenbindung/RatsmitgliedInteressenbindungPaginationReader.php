<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
/**
* @return RatsmitgliedInteressenbindungRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new RatsmitgliedInteressenbindungRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}