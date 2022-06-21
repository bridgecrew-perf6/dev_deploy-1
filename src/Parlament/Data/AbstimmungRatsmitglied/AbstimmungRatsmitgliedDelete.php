<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungRatsmitgliedModel();
}
}