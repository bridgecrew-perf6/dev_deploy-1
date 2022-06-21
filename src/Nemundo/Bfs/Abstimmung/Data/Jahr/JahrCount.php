<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
}