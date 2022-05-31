<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var DatumModel
*/
protected $model;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $datum;

/**
* @var int
*/
public $jahr;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
$this->datum = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->datum, $this->typeValueList);
$property->setValue($this->datum);
$this->typeValueList->setModelValue($this->model->jahr, $this->jahr);
$id = parent::save();
return $id;
}
}