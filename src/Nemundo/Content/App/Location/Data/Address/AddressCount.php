<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AddressModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
}