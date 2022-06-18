<?php
namespace Nemundo\Content\App\Location\Data\Address;
class Address extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AddressModel
*/
protected $model;

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
public function save() {
$this->typeValueList->setModelValue($this->model->street, $this->street);
$this->typeValueList->setModelValue($this->model->place, $this->place);
$id = parent::save();
return $id;
}
}