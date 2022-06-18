<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var MesswertDateTimeModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var \Nemundo\Core\Type\DateTime\DateTime
*/
public $dateTime;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $date;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->dateTime = new \Nemundo\Core\Type\DateTime\DateTime($this->getModelValue($model->dateTime));
$value = $this->getModelValue($model->date);
if ($value !== "0000-00-00") {
$this->date = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->date));
}
}
}