<?php
namespace Parlament\Data\GeschaeftText;
use Nemundo\Model\Id\AbstractModelIdValue;
class GeschaeftTextId extends AbstractModelIdValue {
/**
* @var GeschaeftTextModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new GeschaeftTextModel();
}
}