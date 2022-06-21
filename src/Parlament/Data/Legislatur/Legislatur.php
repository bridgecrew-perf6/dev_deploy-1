<?php
namespace Parlament\Data\Legislatur;
class Legislatur extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var LegislaturModel
*/
protected $model;

/**
* @var int
*/
public $code;

/**
* @var string
*/
public $legislatur;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $von;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $bis;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
$this->von = new \Nemundo\Core\Type\DateTime\Date();
$this->bis = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->legislatur, $this->legislatur);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->von, $this->typeValueList);
$property->setValue($this->von);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->bis, $this->typeValueList);
$property->setValue($this->bis);
$id = parent::save();
return $id;
}
}