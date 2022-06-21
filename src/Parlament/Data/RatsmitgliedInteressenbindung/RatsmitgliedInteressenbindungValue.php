<?php
namespace Parlament\Data\RatsmitgliedInteressenbindung;
class RatsmitgliedInteressenbindungValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var RatsmitgliedInteressenbindungModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedInteressenbindungModel();
}
}