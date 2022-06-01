<?php
namespace Parlament\Data\GeschaeftKommission;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftKommissionId extends AbstractModelIdValue {
/**
* @var GeschaeftKommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftKommissionModel();
}
}