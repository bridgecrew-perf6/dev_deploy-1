<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var DateContentModel
*/
protected $model;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $dateFrom;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $dateTo;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
$this->dateFrom = new \Nemundo\Core\Type\DateTime\Date();
$this->dateTo = new \Nemundo\Core\Type\DateTime\Date();
}
public function save() {
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->dateFrom, $this->typeValueList);
$property->setValue($this->dateFrom);
$property = new \Nemundo\Model\Data\Property\DateTime\DateDataProperty($this->model->dateTo, $this->typeValueList);
$property->setValue($this->dateTo);
$id = parent::save();
return $id;
}
}