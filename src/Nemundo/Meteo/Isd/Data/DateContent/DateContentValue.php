<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var DateContentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
}
}