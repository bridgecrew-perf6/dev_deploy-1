<?php
namespace Nemundo\Bfs\Gemeinde\Data\Kanton;
use Nemundo\Model\Id\AbstractModelIdValue;
class KantonId extends AbstractModelIdValue {
/**
* @var KantonModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KantonModel();
}
}