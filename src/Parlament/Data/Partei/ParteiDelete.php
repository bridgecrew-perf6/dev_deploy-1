<?php
namespace Parlament\Data\Partei;
class ParteiDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var ParteiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ParteiModel();
}
}