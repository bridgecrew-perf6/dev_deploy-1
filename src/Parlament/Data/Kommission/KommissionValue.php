<?php
namespace Parlament\Data\Kommission;
class KommissionValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var KommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
}