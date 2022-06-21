<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
}