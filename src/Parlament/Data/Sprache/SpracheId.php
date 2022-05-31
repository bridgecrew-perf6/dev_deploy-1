<?php
namespace Parlament\Data\Sprache;
use Nemundo\Model\Id\AbstractModelIdValue;
class SpracheId extends AbstractModelIdValue {
/**
* @var SpracheModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new SpracheModel();
}
}