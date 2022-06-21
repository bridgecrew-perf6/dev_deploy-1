<?php
namespace Parlament\Data\Partei;
use Nemundo\Model\Id\AbstractModelIdValue;
class ParteiId extends AbstractModelIdValue {
/**
* @var ParteiModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ParteiModel();
}
}