<?php
namespace Parlament\Data\AbstimmungRatsmitglied;
use Nemundo\Model\Id\AbstractModelIdValue;
class AbstimmungRatsmitgliedId extends AbstractModelIdValue {
/**
* @var AbstimmungRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungRatsmitgliedModel();
}
}