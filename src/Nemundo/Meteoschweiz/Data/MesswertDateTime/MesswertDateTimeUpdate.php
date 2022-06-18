<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
use Nemundo\Model\Data\AbstractModelUpdate;
class MesswertDateTimeUpdate extends AbstractModelUpdate {
/**
* @var MesswertDateTimeModel
*/
public $model;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $date;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime();
$this->date = new \Nemundo\Core\Type\DateTime\Date();
}
public function update() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateTimeDataProperty($this->model->dateTime, $this->typeValueList);
$property->setValue($this->dateTime);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->date, $this->typeValueList);
$property->setValue($this->date);
parent::update();
}
}