<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
}