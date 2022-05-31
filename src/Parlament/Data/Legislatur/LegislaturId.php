<?php
namespace Parlament\Data\Legislatur;
use Nemundo\Model\Id\AbstractModelIdValue;
class LegislaturId extends AbstractModelIdValue {
/**
* @var LegislaturModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LegislaturModel();
}
}