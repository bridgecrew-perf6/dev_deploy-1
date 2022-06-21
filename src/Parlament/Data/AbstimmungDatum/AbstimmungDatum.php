<?php
namespace Parlament\Data\AbstimmungDatum;
class AbstimmungDatum extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AbstimmungDatumModel
*/
protected $model;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $datum;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungDatumModel();
$this->datum = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->datum, $this->typeValueList);
$property->setValue($this->datum);
$id = parent::save();
return $id;
}
}