<?php
namespace Nemundo\Meteoschweiz\Data\CmsMesswertStation;
use Nemundo\Model\Id\AbstractModelIdValue;
class CmsMesswertStationId extends AbstractModelIdValue {
/**
* @var CmsMesswertStationModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CmsMesswertStationModel();
}
}