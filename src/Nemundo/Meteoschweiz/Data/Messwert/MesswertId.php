<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
use Nemundo\Model\Id\AbstractModelIdValue;
class MesswertId extends AbstractModelIdValue {
/**
* @var MesswertModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
}