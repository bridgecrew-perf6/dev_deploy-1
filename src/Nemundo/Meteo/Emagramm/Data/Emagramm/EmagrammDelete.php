<?php
namespace Nemundo\Meteo\Emagramm\Data\Emagramm;
class EmagrammDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var EmagrammModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EmagrammModel();
}
}