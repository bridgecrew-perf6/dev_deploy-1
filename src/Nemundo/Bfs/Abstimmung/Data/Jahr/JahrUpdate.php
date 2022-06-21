<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
use Nemundo\Model\Data\AbstractModelUpdate;
class JahrUpdate extends AbstractModelUpdate {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
public function update() {
parent::update();
}
}