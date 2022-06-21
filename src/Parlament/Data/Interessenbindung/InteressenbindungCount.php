<?php
namespace Parlament\Data\Interessenbindung;
class InteressenbindungCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var InteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new InteressenbindungModel();
}
}