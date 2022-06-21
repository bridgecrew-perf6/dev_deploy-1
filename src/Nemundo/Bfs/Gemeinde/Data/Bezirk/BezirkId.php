<?php
namespace Nemundo\Bfs\Gemeinde\Data\Bezirk;
use Nemundo\Model\Id\AbstractModelIdValue;
class BezirkId extends AbstractModelIdValue {
/**
* @var BezirkModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BezirkModel();
}
}