<?php
namespace Parlament\Data\Legislatur;
use Nemundo\Model\Data\AbstractModelUpdate;
class LegislaturUpdate extends AbstractModelUpdate {
/**
* @var LegislaturModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->code, $this->code);
$this->typeValueList->setModelValue($this->model->legislatur, $this->legislatur);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->von, $this->typeValueList);
$property->setValue($this->von);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->bis, $this->typeValueList);
$property->setValue($this->bis);
parent::update();
}
}