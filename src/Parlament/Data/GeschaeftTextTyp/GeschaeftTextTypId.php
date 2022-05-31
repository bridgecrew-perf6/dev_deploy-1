<?php
namespace Parlament\Data\GeschaeftTextTyp;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftTextTypId extends AbstractModelIdValue {
/**
* @var GeschaeftTextTypModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextTypModel();
}
}