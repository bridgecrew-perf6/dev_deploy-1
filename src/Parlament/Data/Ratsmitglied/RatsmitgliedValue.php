<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var RatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
}
}