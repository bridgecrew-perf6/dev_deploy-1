<?php
namespace Parlament\Data\Rat;
use Nemundo\Model\Id\AbstractModelIdValue;
class RatId extends AbstractModelIdValue {
/**
* @var RatModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatModel();
}
}