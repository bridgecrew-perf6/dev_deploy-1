<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var KantonModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
}