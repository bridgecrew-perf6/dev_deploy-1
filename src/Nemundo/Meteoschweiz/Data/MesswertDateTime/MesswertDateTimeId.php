<?php
namespace Nemundo\Meteoschweiz\Data\MesswertDateTime;
use Nemundo\Model\Id\AbstractModelIdValue;
class MesswertDateTimeId extends AbstractModelIdValue {
/**
* @var MesswertDateTimeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertDateTimeModel();
}
}