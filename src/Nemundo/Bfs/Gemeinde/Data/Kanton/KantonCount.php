<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var KantonModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
}