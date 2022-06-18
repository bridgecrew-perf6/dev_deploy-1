<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var MesswertDateTimeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
}
}