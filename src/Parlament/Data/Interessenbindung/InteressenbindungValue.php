<?php
namespace Parlament\Data\Interessenbindung;
class InteressenbindungValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var InteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
}