<?php
namespace Nemundo\Meteoschweiz\Data\MesswertStation;
class MesswertStationDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var MesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertStationModel();
}
}