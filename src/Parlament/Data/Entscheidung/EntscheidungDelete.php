<?php
namespace Parlament\Data\Entscheidung;
class EntscheidungDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var EntscheidungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
}