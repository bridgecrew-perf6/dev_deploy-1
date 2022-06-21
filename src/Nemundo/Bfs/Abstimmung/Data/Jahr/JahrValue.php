<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
}