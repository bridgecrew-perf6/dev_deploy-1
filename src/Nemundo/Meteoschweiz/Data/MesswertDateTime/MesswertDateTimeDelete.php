<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
class MesswertDateTimeDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var MesswertDateTimeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
}
}