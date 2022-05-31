<?php
namespace Nemundo\Bfs\Abstimmung\Data\Datum;
use Nemundo\Model\Id\AbstractModelIdValue;
class DatumId extends AbstractModelIdValue {
/**
* @var DatumModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new DatumModel();
}
}