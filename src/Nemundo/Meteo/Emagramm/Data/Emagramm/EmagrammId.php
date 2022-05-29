<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
use Nemundo\Model\Id\AbstractModelIdValue;
class EmagrammId extends AbstractModelIdValue {
/**
* @var EmagrammModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
}
}