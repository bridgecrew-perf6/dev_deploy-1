<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
class KantonDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var KantonModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
}