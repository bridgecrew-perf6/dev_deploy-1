<?php
namespace Nemundo\Meteoschweiz\Data\Messwert;
class MesswertDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var MesswertModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new MesswertModel();
}
}