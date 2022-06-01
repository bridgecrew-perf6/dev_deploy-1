<?php
namespace Parlament\Data\AbstimmungDatum;
use Nemundo\Model\Data\AbstractModelUpdate;
class AbstimmungDatumUpdate extends AbstractModelUpdate {
/**
* @var AbstimmungDatumModel
*/
public $model;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $datum;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
$this->datum = new \Nemundo\Core\Type\DateTime\Date();
}
public function update() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->datum, $this->typeValueList);
$property->setValue($this->datum);
parent::update();
}
}