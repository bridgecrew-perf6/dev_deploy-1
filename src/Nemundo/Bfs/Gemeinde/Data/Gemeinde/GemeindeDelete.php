<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
class GemeindeDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var GemeindeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
}