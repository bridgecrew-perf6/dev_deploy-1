<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
class BezirkDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var BezirkModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
}