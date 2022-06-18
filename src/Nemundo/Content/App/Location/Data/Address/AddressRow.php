<?php
namespace Nemundo\Content\App\Location\Data\Address;
class AddressRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var AddressModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $street;

/**
* @var string
*/
public $place;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->street = $this->getModelValue($model->street);
$this->place = $this->getModelValue($model->place);
}
}