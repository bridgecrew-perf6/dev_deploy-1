<?php
namespace Parlament\Data\Sprache;
class SpracheDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var SpracheModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
}