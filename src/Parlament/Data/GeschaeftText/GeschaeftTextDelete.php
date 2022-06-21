<?php
namespace Parlament\Data\GeschaeftText;
class GeschaeftTextDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftTextModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
}