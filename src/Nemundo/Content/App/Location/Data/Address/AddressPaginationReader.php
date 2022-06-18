<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressPaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var AddressModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
/**
* @return AddressRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new AddressRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}