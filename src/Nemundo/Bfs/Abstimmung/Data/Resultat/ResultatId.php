<?php
namespace Nemundo\Bfs\Abstimmung\Data\Resultat;
use Nemundo\Model\Id\AbstractModelIdValue;
class ResultatId extends AbstractModelIdValue {
/**
* @var ResultatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ResultatModel();
}
}