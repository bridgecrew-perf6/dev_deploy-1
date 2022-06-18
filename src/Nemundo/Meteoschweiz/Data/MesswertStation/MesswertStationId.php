<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
use Nemundo\Model\Id\AbstractModelIdValue;
class MesswertStationId extends AbstractModelIdValue {
/**
* @var MesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
}
}