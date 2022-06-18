<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
class CmsMesswertStationDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var CmsMesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
}