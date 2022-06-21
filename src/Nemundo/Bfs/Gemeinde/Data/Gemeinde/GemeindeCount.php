<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var GemeindeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
}