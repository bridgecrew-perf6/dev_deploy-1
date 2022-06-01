<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var LastUpdateModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
}
}