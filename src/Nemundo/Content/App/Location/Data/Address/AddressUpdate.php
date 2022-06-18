<?php
namespace Nemundo\Content\App\Location\Data\Address;
use Nemundo\Model\Data\AbstractModelUpdate;
class AddressUpdate extends AbstractModelUpdate {
/**
* @var AddressModel
*/
public $model;

/**
* @var string
*/
public $street;

/**
* @var string
*/
public $place;

public function __construct() {
parent::__construct();
$this->model = new AddressModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->street, $this->street);
$this->typeValueList->setModelValue($this->model->place, $this->place);
parent::update();
}
}