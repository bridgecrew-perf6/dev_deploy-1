<?php
namespace Parlament\Data\KommissionFunktion;
use Nemundo\Model\Id\AbstractModelIdValue;
class KommissionFunktionId extends AbstractModelIdValue {
/**
* @var KommissionFunktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionFunktionModel();
}
}