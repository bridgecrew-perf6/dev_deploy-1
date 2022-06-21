<?php
namespace Nemundo\Bfs\Abstimmung\Data\Jahr;
class JahrDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var JahrModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new JahrModel();
}
}