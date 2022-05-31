<?php
namespace Parlament\Data\Fraktion;
class FraktionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var FraktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
}