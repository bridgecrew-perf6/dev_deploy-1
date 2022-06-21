<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
use Nemundo\Model\Id\AbstractModelIdValue;
class JahrId extends AbstractModelIdValue {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
}