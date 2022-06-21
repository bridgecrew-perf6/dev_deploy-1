<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var ResultatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ResultatModel();
}
}