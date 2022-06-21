<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
class DatumDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var DatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
}
}