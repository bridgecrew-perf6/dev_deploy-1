<?php
namespace Parlament\Data\Kommission;
class KommissionDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var KommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
}