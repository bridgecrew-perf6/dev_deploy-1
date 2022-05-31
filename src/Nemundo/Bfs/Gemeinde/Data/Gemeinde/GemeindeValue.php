<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var GemeindeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
}