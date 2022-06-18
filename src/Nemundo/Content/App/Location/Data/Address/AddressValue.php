<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AddressModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
}