<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
class AbstimmungRatsmitgliedCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungRatsmitgliedModel();
}
}