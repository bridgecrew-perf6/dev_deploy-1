<?php
namespace Parlament\Data\Abstimmung;
class AbstimmungCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AbstimmungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
}