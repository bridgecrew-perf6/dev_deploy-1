<?php
namespace Parlament\Data\KommissionFunktion;
class KommissionFunktionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var KommissionFunktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
}