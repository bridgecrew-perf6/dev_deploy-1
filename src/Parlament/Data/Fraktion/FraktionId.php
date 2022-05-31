<?php
namespace Parlament\Data\Fraktion;
use Nemundo\Model\Id\AbstractModelIdValue;
class FraktionId extends AbstractModelIdValue {
/**
* @var FraktionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new FraktionModel();
}
}