<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var ResultatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ResultatModel();
}
}