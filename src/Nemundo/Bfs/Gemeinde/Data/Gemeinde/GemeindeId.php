<?php
namespace Nemundo\Bfs\Gemeinde\Data\Gemeinde;
use Nemundo\Model\Id\AbstractModelIdValue;
class GemeindeId extends AbstractModelIdValue {
/**
* @var GemeindeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GemeindeModel();
}
}