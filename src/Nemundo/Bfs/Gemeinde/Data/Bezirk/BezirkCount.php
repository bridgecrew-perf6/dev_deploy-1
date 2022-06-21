<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var BezirkModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
}