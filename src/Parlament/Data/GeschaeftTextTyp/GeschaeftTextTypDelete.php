<?php
namespace Parlament\Data\GeschaeftTextTyp;
class GeschaeftTextTypDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GeschaeftTextTypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
}