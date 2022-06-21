<?php
namespace Parlament\Data\Entscheidung;
use Nemundo\Model\Id\AbstractModelIdValue;
class EntscheidungId extends AbstractModelIdValue {
/**
* @var EntscheidungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new EntscheidungModel();
}
}