<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var BezirkModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
}