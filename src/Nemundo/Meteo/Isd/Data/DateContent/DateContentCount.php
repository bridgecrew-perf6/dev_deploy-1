<?php
namespace Nemundo\Meteo\Isd\Data\DateContent;
class DateContentCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var DateContentModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DateContentModel();
}
}