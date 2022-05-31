<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
class ResultatDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var ResultatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ResultatModel();
}
}