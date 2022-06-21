<?php
namespace Parlament\Data\GeschaeftThema;
class GeschaeftThemaDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftThemaModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftThemaModel();
}
}