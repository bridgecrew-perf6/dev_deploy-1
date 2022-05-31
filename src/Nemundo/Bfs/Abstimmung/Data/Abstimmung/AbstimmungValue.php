<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
class AbstimmungValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var AbstimmungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
}