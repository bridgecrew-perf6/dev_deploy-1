<?php
namespace Parlament\Data\Kommission;
use Nemundo\Model\Id\AbstractModelIdValue;
class KommissionId extends AbstractModelIdValue {
/**
* @var KommissionModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionModel();
}
}